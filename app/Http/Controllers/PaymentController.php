<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PaymentController extends Controller
{

    private $mbmeConfig = [
//        'api_url' => 'https://pgapi.mbmepay.ae/api/v2/payments/create-order',
//        'api_url_payment' => 'https://pgapi.mbmepay.ae/api/v2/order',
//        'bearer_token' => 'IjTcRdZ3bHY5FUA75wAc7r4+snfu8O+HWRKqLliYj48=',
//        'key' => '68a4390d0a36ce343333ee8c',
//        'uid' => '129',
//        'algorithm' => 'SHA-256'
         'api_url' => 'https://pgapi.mbme.org/api/v2/payments/create-order',
         'api_url_payment' => 'https://pgapi.mbme.org/api/v2/order',
         'bearer_token' => '4XvqQpDsSa5nF0kjE7ypKSwGagefxFL2Iws1mwP7YZs=',
         'key' => '68a7289aedab8f2be559955b',
         'uid' => '158',
         'algorithm' => 'SHA-256',
    ];

    public function index($price, $currency){
        return view('frontend', ['price' => $price, 'currency' => $currency]);
    }

    public function createOrder(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = Validator::make($request->all(), [
                'customer_info.name'                => 'required|string|max:255',
                'customer_info.email'               => 'required|email|max:255',
                'customer_info.mobile_country_code' => 'required|string|max:5',
                'customer_info.mobile_number'       => 'required|string|max:20',
                'transaction_info.amount'           => 'required|numeric|min:0.01',
                'transaction_info.currency'         => 'required|string|in:AED,USD',
                'response_config.success_redirect_url' => 'nullable|url',
                'response_config.failure_redirect_url' => 'nullable|url',
            ])->validate();

            $oid        = Str::uuid()->toString();
            $timestamp  = Carbon::now()->toISOString();
            $refNumber  = $this->generateReferenceNumber();

            // Prepare the payload
            $signingPayload = [
                'uid'            => $this->mbmeConfig['uid'],
                'oid'            => $oid,
                'timestamp'      => $timestamp,
                'request_method' => 'embedded_iframe',

                'customer_info'  => [
                    'name'                => $validated['customer_info']['name'],
                    'email'               => $validated['customer_info']['email'],
                    'mobile_country_code' => $validated['customer_info']['mobile_country_code'],
                    'mobile_number'       => $validated['customer_info']['mobile_number'],
                ],

                'transaction_info'=> [
                    'amount'   => (string) $validated['transaction_info']['amount'],
                    'currency' => $validated['transaction_info']['currency'],
                ],

                'payment_info'   => [
                    'payment_method_id' => $request->input('payment_info.payment_method_id'),
                    'save_card'         => false,
                ],

                'client_info'    => [
                    'reference_number' => $refNumber,
                ],

                'response_config'=> [
                    'success_redirect_url' => $validated['response_config']['success_redirect_url'] ?? '',
                    'failure_redirect_url' => $validated['response_config']['failure_redirect_url'] ?? '',
                ],
            ];

            $secureSign = $this->generateSignature($signingPayload, $this->mbmeConfig['key']);

            $payload = $signingPayload;
            unset($payload['key'], $payload['algorithm']);
            $payload['secure_sign'] = $secureSign;

            $response = Http::withHeaders([
                'Content-Type'  => 'application/json',
                'Authorization' => 'Bearer ' . $this->mbmeConfig['bearer_token'],
            ])->timeout(30)->post($this->mbmeConfig['api_url'], $payload);

            if (!$response->successful()) {
                Log::error('MBME API Error', [
                    'status'   => $response->status(),
                    'response' => $response->body()
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'Payment gateway error',
                    'error'   => 'API request failed'
                ], 500);
            }

            $responseData = $response->json();

            if ($responseData['status'] === 'ORDER_CREATED') {
                Log::info('MBME Order Created', [
                    'oid'            => $oid,
                    'customer_email' => $validated['customer_info']['email'],
                    'amount'         => $validated['transaction_info']['amount'],
                    'currency'       => $validated['transaction_info']['currency']
                ]);


                $baseUrl = config('app.url') . '/payment';
                $paymentUrl = $baseUrl . '?oid=' . urlencode($oid) . '&uid=' . urlencode($this->mbmeConfig['uid']);

                $uid = $this->mbmeConfig['uid'];

                return view('mbme',compact('oid','uid'));
            }

            Log::error('MBME Order Creation Failed', [
                'status'        => $responseData['status'],
                'message'       => $responseData['status_message'] ?? 'Unknown error',
                'full_response' => $responseData
            ]);

            return response()->json([
                'success' => false,
                'message' => $responseData['status_message'] ?? 'Order creation failed',
                'error'   => 'Order creation failed'
            ], 400);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors'  => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            Log::error('Payment Order Creation Error', [
                'message' => $e->getMessage(),
                'trace'   => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong while creating the order',
                'error'   => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }

    public function getStatusOfPayment(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'oid'=> 'required|string|max:255',
            ]);

            $timestamp  = Carbon::now()->toISOString();

            $signingPayload = [
                'uid'             => $this->mbmeConfig['uid'],
                'oid'             => $request->oid,
                'timestamp'       => $timestamp,
                'request_method'  => 'order_status',
            ];

            $secureSign = $this->generateSignature($signingPayload, $this->mbmeConfig['key']);

            $payload = $signingPayload;
            unset($payload['key'], $payload['algorithm']);
            $payload['secure_sign'] = $secureSign;

            $response = Http::withHeaders([
                'Content-Type'  => 'application/json',
                'Authorization' => 'Bearer '.$this->mbmeConfig['bearer_token'],
            ])->timeout(30)->post($this->mbmeConfig['api_url_payment'], $payload);

            if (!$response->successful()) {
                Log::error('MBME API Error', [
                    'status' => $response->status(),
                    'response' => $response->body()
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'Payment gateway error',
                    'error' => 'API request failed'
                ], 500);
            }

            $responseData = $response->json();
            $data = $responseData['data'] ?? [];

            // Extract basic payment info
            $status = $data['status'] ?? null;
            $statusMessage = $data['status_message'] ?? 'Unknown status';
            $cardLast4 = $data['card_last4'] ?? null;
            $amount = $data['amount'] ?? null;
            $currency = $data['currency'] ?? null;

            if (strtoupper($status) === 'APPROVED') {
                return response()->json([
                    'success' => true,
                    'message' => $statusMessage,
                    'data' => [
                        'card_last4' => $cardLast4,
                        'amount' => $amount,
                        'currency' => $currency,
                    ]
                ]);
            }

            if (strtoupper($status) === 'FAILED' || strtoupper($status) === 'DECLINED') {
                return response()->json([
                    'success' => false,
                    'message' => $statusMessage,
                    'data' => [
                        'card_last4' => $cardLast4,
                        'amount' => $amount,
                        'currency' => $currency,
                    ]
                ], 400);
            }

            // Default fallback
            return response()->json([
                'success' => false,
                'message' => 'Unknown payment status',
                'data' => [
                    'card_last4' => $cardLast4,
                    'amount' => $amount,
                    'currency' => $currency,
                ]
            ], 400);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            Log::error('Payment Status Check Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong while checking payment status',
                'error' => config('app.debug') ? $e->getMessage() : 'Internal server error'
            ], 500);
        }
    }




    /**
     * Generate a secure signature for MBME API
     */
    private function generateSignature(array $data, string $key): string
    {
        $flattened     = $this->flattenAndSort($data);     // recursive-dot-notation sort
        $sortedString  = $this->createSortedString($flattened);

        // No need to log the key itself in production logs
        Log::debug('MBME signing string', ['string' => $sortedString]);

        return hash_hmac('sha256', $sortedString, $key);
    }

    /**
     * Flatten nested array and sort keys
     */
    private function flattenAndSort(array $data, string $parentKey = ''): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            $fullKey = $parentKey ? "{$parentKey}.{$key}" : $key;

            if (is_array($value) && !is_null($value) && !empty($value)) {
                $result = array_merge($result, $this->flattenAndSort($value, $fullKey));
            } else {
                // Convert boolean to string representation
                if (is_bool($value)) {
                    $value = $value ? 'true' : 'false';
                }
                $result[$fullKey] = (string) $value;
            }
        }

        return $result;
    }

    /**
     * Create sorted query string
     */
    private function createSortedString(array $flattened): string
    {
        ksort($flattened);

        $pairs = [];
        foreach ($flattened as $key => $value) {
            $pairs[] = "{$key}={$value}";
        }

        return implode('&', $pairs);
    }

    /**
     * Generate a random reference number
     */
    private function generateReferenceNumber(): string
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $length = 20;
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $result .= $chars[random_int(0, strlen($chars) - 1)];
        }

        return $result;
    }
}
