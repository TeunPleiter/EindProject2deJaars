<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\api\MovieController;
use App\Models\Movie;

// Default route (root URL)

// Route for login page
Route::get('/login', function () {
    return view('layouts.pages.login'); // Adjust according to your view location
})->name('login');

// Route for logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/movies');
})->name('logout');

// Profile routes protected by auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/addfavorite/{id}', [FavoriteController::class, 'addfavorite'])->name('addfavorite');
    Route::get('/removefavorite/{id}', [FavoriteController::class, 'removefavorite'])->name('removefavorite');
    Route::get('/favorites', [FavoriteController::class, 'showfavorites'])->name('showfavorites');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route for the getEmail function
    Route::get('/profile/email', [ProfileController::class, 'getEmail'])->name('profile.email');

    Route::get('/', function () {
        return view('index');
    })->name('home'); // Added a name for the root route for better management

    // Route for home page
    Route::get('/movies', function () {
        $movies = Movie::all();
        return view('layouts.pages.home', ['movies' => $movies]);
    });

    // Route for contact page
    Route::get('/contact', function () {
        return view('layouts.pages.contact');
    });

    // Default welcome route
    Route::get('/welcome', function () {
        return view('welcome');
    });

    // Route for home page
    Route::get('/movies', function () {
        $movies = Movie::all();
        return view('layouts.pages.home', ['movies' => $movies]);
    });

    // Route for contact page
    Route::get('/contact', function () {
        return view('layouts.pages.contact');
    });

    // Dashboard route requiring authentication and email verification
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

// New routes requiring authentication
Route::middleware('auth')->group(function () {
    Route::get('/allMovies', function () {
        return view('layouts.pages.allMovies'); // Adjust the view path according to your structure
    })->name('allMovies');

    Route::get('/user', function () {
        return view('layouts.pages.user'); // Adjust the view path according to your structure
    })->name('user');

    Route::get('/search', function () {
        return view('layouts.pages.search'); // Adjust the view path according to your structure
    })->name('search');
    
    Route::get('/search/results', [MovieController::class, 'search'])->name('search.perform');
});

// Include default Laravel authentication routes
require __DIR__ . '/auth.php';

//route for getPoster function from MovieController
Route::get('/getPoster/{id}', [MovieController::class, 'getPoster'])->name('getPoster');
