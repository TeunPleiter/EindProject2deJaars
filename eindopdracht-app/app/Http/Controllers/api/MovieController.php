<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

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
            'movie_type' => 'required|integer',
            'title' => 'required|string|max:255',
            'year' => 'required|integer',
            'minutes' => 'required|integer'
        ]);

        $movie = Movie::create($request->all());

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
            'movie_type' => 'sometimes|required|integer',
            'title' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer',
            'minutes' => 'sometimes|required|integer'
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

    // Function to extract poster from OMDb API using title from the database in movie table title column
    public function getPoster($id)
    {
        $movie = Movie::findOrFail($id);
        $title = $movie->title;
        $response = Http::get('http://www.omdbapi.com/?apikey=4a3b711b&t=' . urlencode($title));
        $poster = $response->json()['Poster'];
        return redirect($poster);
    }

    // Search bar function
    public function search(Request $request)
    {
        $title = $request->input('title');
        
        // Fetch movies from database
        $movies = Movie::where('title', 'like', '%' . $title . '%')->get();

        // Fetch additional details from OMDb API for each movie
        $movieDetails = $movies->map(function($movie) {
            $response = Http::get('http://www.omdbapi.com/?apikey=4a3b711b&t=' . urlencode($movie->title));
            $data = $response->json();
            return [
                'title' => $movie->title,
                'poster' => $data['Poster'] !== 'N/A' ? $data['Poster'] : null,
                'description' => $data['Plot'],
            ];
        });

        return view('search.results', ['movies' => $movieDetails]);
    }
}
