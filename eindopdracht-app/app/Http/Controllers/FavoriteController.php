<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FavoriteController extends Controller
{
    public function addfavorite(Request $request, $id)
    {
        $user = auth()->user();

        // Check if the favorite already exists
        $existingFavorite = Favorite::where('user_id', $user->id)
            ->where('movie_id', $id)
            ->first();

        if ($existingFavorite) {
            // Return with an error message
            return redirect()->route('showfavorites')->with('error', 'This movie is already in your favorites.');
        }

        // If the favorite does not exist, create it
        $user->favorites()->create(['movie_id' => $id, 'user_id' => $user->id]);

        // Redirect to /showfavorites route
        return redirect()->route('showfavorites');
    }

    public function removefavorite(Request $request, $id)
    {
        $user = auth()->user();
        Favorite::where('user_id', $user->id)->where('movie_id', $id)->delete();
        return redirect()->route('showfavorites');
    }

    public function showfavorites(Request $request)
    {
        $user = auth()->user();
        $favorite = Favorite::where('user_id', $user->id)->get();
        return view('favorites', ['favorites' => $favorite]);
    }
}
