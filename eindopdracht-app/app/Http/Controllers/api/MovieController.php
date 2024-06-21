<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie; // Import your Movie model

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return response()->json($movies);
    }
}
