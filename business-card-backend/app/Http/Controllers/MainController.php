<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Project;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
                'imageUrl' => asset($client->imageUrl),
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
                'imageUrl' => asset($project->imageUrl),
            ];
        });

        return response()->json($projects);
    }

    public function storeContactDetails(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'details' => 'required|string',
                'message' => 'required|string',
            ]);

            $contact = Contact::create($validated);

            return response()->json([
                'success' => true,
                'contact' => $contact,
            ], 201);
        }
        catch (Exception $exception) {
            return response()->json([
                'message' => 'Internal server error',
            ], 500);
        }
    }
}
