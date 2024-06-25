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


Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

Route::post('/movies/create', [MovieController::class, 'store'])->name('movies.store');

Route::put('/movies/update/{id}', [MovieController::class, 'update'])->name('movies.update');

Route::delete('/movies/delete/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');

