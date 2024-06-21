<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'release_date' => 'required|date',
        ]);

        $movie = Movie::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'release_date' => $request->input('release_date'),
        ]);

        return response()->json($movie, Response::HTTP_CREATED);
    }

    // Display the specified resource.
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return response()->json($movie);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'release_date' => 'sometimes|required|date',
        ]);

        $movie = Movie::findOrFail($id);
        $movie->update($request->all());

        return response()->json($movie);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
