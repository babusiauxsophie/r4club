<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard route with middleware for authentication and email verification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes for profile management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for user management
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{id}', [UserController::class, 'update'])->name('users.update');
});

// Routes for users
Route::get('/users', [UserController::class, 'list'])->name('users.list');
Route::get('/users/{id}', [UserController::class, 'detail'])->name('users.detail');

// Routes for cars
Route::get('/cars', [CarController::class, 'list']);
Route::get('/cars/{id?}', [CarController::class, 'detail']);
Route::get('/users/{user}/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/users/{user}/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');

// Routes for events
Route::get('/events', [EventController::class, 'list'])->name('events.list');
Route::get('/events/{id}', [EventController::class, 'detail'])->name('events.detail');
Route::post('/events', [EventController::class, 'store'])->name('events.store');

// Routes for posts
Route::get('/posts', [PostController::class, 'list'])->name('posts.list');
Route::get('/posts/{id?}', [PostController::class, 'detail'])->name('posts.detail');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

require __DIR__.'/auth.php';
