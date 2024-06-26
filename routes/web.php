<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute untuk otentikasi
Auth::routes();

// Rute untuk PostController
Route::resource('posts', PostController::class)->only(['index', 'show', 'create', 'store']);
Route::resource('posts', PostController::class)->except(['index', 'show', 'create', 'store'])->middleware('auth');

// Rute untuk CommentController
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');

require __DIR__.'/auth.php';

