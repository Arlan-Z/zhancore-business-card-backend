<?php
namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class MainController extends Controller
{
    public function clients(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'reviews' => [
                ['message' => 'Good Company!'],
                ['message' => 'Good Service!'],
                ['message' => 'Good Support!'],
                ['message' => 'Good Something!'],
            ]
        ]);
    }

    public function projects(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'reviews' => [
                ['message' => 'Good Company!'],
                ['message' => 'Good Service!'],
                ['message' => 'Good Support!'],
                ['message' => 'Good Something!'],
            ]
        ]);
    }

    public function storeContactDetails(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'reviews' => [
                ['message' => 'Good Company!'],
                ['message' => 'Good Service!'],
                ['message' => 'Good Support!'],
                ['message' => 'Good Something!'],
            ]
        ]);
    }
}
