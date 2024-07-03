<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\FavoriteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth')->group(function () {
    Route::post('/addfavorite/{id}', [FavoriteController::class, 'addfavorite']);
});
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');



Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

Route::post('/movies/create', [MovieController::class, 'store'])->name('movies.store');

Route::put('/movies/update/{id}', [MovieController::class, 'update'])->name('movies.update');

Route::delete('/movies/delete/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');

Route::post('/movies/toggle', [FavoriteController::class, 'addfavorite'])->name('movies.addfavorite');

/**
 function for search bar
 */
Route::get('/movies/search/{title}', [MovieController::class, 'search'])->name('movies.search');