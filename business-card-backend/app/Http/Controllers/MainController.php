<?php
namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class MainController extends Controller
{
    public function index(): JsonResponse
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
