<?php

namespace App\Http\Controllers;

use App\Services\MbmeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrafiicChalanController extends Controller
{
    protected $mbmeService;

    public function __construct(MbmeService $mbmeService)
    {
        $this->mbmeService = $mbmeService;
    }

    public function getToken(): JsonResponse
    {
        try {
            $token = $this->mbmeService->generateToken();
            return response()->json([
                'success' => true,
                'data'    => $token
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
