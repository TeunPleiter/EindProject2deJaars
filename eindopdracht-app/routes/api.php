<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

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


// Route to get all movies
Route::get('movies', [MovieController::class, 'index'])->name('movies.index');

// Route to create a new movie
Route::post('movies', [MovieController::class, 'store'])->name('movies.store');

// Route to get a specific movie by ID
Route::get('movies/{movie}', [MovieController::class, 'show'])->name('movies.show');

// Route to update a specific movie by ID
Route::put('movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
Route::patch('movies/{movie}', [MovieController::class, 'update'])->name('movies.update');

// Route to delete a specific movie by ID
Route::delete('movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
