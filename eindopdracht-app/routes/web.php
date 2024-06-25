<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Default route (root URL)

// Route for login page
Route::get('/login', function () {
    return view('layouts.pages.login'); // Adjust according to your view location
})->name('login'); // It's a good practice to name your routes

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');

})->name('logout');
// Route for home page
Route::get('/home', function () {
    return view('layouts.pages.home');
});

// Route for contact page
Route::get('/contact', function () {
    return view('layouts.pages.contact');
});

// Default welcome route
Route::get('/welcome', function () {
    return view('welcome');
});

// Dashboard route requiring authentication and email verification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes protected by auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {
        return view('index');
    })->name('home'); // Added a name for the root route for better management
});

// Include default Laravel authentication routes
require __DIR__ . '/auth.php';
