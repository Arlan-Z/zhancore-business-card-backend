<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\JsonResponse;

class MainController extends Controller
{
    public function clients(): JsonResponse
    {
        $clients = Client::all();

        if ($clients->isEmpty()) {
            return response()->json(['message' => 'Clients not found'], 404);
        }

        $clients = $clients->map(function($client) {
            return [
                'name' => $client->name,
                'review' => $client->review,
                'imageUrl' => $client->imageUrl,
            ];
        });

        return response()->json($clients);
    }

    public function projects(): JsonResponse
    {
        $projects = Project::all();

        if ($projects->isEmpty()) {
            return response()->json(['message' => 'Projects not found'], 404);
        }

        $projects = $projects->map(function($project) {
            return [
                'name' => $project->name,
                'review' => $project->review,
                'imageUrl' => $project->imageUrl,
            ];
        });

        return response()->json($projects);
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
