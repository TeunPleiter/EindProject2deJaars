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
        $user->favorites()->create(['movie_id' => $id, 'user_id' => $user->id]);
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
        $favorites = Favorite::where('user_id', $user->id)->get();
        return view('favorites', ['favorites' => $favorites]);
    }
}
