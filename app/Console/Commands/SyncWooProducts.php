<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SyncWooProducts extends Command
{
    protected $signature = 'sync:woo-products';
    protected $description = 'Sync products to WooCommerce using API';

    public function handle()
    {
        $payload = [
            "amount" => 10,
            "currency" => "USD",
            "description" => "Professional Service Fee",
            "payment_type" => "one_time",
            "is_test" => true,
            "success_url" => "http://google.com",
            "failure_url" => "http://google.com",
            "metadata" => [
                "customer_name" => "Test User",
                "customer_email" => "testuser@gmail.com",
                "customer_phone" => "+971500000000",
                "order_id" => "12312312",
                "products" => [
                    [
                        "name" => "Meta AI Glasses 2",
                        "quantity" => 1,
                        "type" => "simple",
                        "regular_price" => "50",
                        "sale_price" => "1",
                        "sku" => "META-GLASSES-002",
                        "manage_stock" => false,
                        "in_stock" => true,
                        "categories" => [
                            ["name" => "Apple"]
                        ],
                        "tags" => [
                            ["name" => "Camera"]
                        ],
                        "images" => [
                            ["src" => "http://asimit.hsaglobalinvest.com/wp-content/uploads/2025/08/Meta-AI-Glasses.png", "position" => 0],
                            ["src" => "http://asimit.hsaglobalinvest.com/wp-content/uploads/2025/08/Meta-AI-Glasses.png", "position" => 1],
                            ["src" => "http://asimit.hsaglobalinvest.com/wp-content/uploads/2025/08/Meta-AI-Glasses.png", "position" => 2]
                        ]
                    ]
                ]
            ]
        ];

        // WooCommerce Credentials
        $store_url = "https://asimit.hsaglobalinvest.com";
        $consumer_key = "ck_fab6dad04f0f1b625ac55d1b3ed46ce6c94e217c";
        $consumer_secret = "cs_2e6f08b88bed9606279e5c1176f1771073e840c6";

        $endpoint = $store_url . "/wp-json/wc/v3/products";

        foreach ($payload['metadata']['products'] as $product) {
            // Build categories array properly
            $categories = [];
            if (!empty($product['categories'])) {
                foreach ($product['categories'] as $cat) {
                    $categories[] = ["name" => $cat['name']];
                }
            }

            // Build tags array properly
            $tags = [];
            if (!empty($product['tags'])) {
                foreach ($product['tags'] as $tag) {
                    $tags[] = ["name" => $tag['name']];
                }
            }

            // Skip images for now to avoid upload errors
            $images = [];
            // Uncomment below if you want to include images
            /*
            if (!empty($product['images'])) {
                foreach ($product['images'] as $index => $img) {
                    if ($this->validateImageUrl($img['src'])) {
                        $images[] = [
                            "src" => $img['src'],
                            "position" => $img['position'] ?? $index
                        ];
                    }
                }
            }
            */

            // Prepare final WooCommerce product data
            $data = [
                "name"          => $product['name'] ?? '',
                "type"          => $product['type'] ?? 'simple',
                "regular_price" => $product['regular_price'] ?? '0',
                "sale_price"    => $product['sale_price'] ?? '',
                "sku"           => $product['sku'] ?? '',
                "manage_stock"  => $product['manage_stock'] ?? false,
                "stock_quantity"=> $product['quantity'] ?? null,
                "in_stock"      => $product['in_stock'] ?? true,
                "categories"    => $categories,
                "tags"          => $tags,
                "images"        => $images
            ];

            // Send to WooCommerce API
            $response = Http::withBasicAuth($consumer_key, $consumer_secret)
                ->withOptions(['verify' => false])
                ->withHeaders([
                    'Content-Type' => 'application/json'
                ])
                ->post($endpoint, $data);

            // Check response
            if ($response->successful()) {
                $this->info("Product '{$product['name']}' synced successfully.");
            } else {
                $this->error("Failed to sync product '{$product['name']}'. Response: " . $response->body());
            }
        }

        return 0;
    }

    /**
     * Validate if image URL is accessible
     */
    private function validateImageUrl($url)
    {
        try {
            $response = Http::timeout(10)->head($url);
            return $response->successful();
        } catch (\Exception $e) {
            $this->warn("Error validating image URL {$url}: " . $e->getMessage());
            return false;
        }
    }
}
