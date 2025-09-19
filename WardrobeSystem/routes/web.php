<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AttiresController;
use Illuminate\Support\Facades\Route;

// Public landing (if you want it public)
// Route::get('/', [AttiresController::class, 'welcome'])->name('welcome');

// Dashboard (protected)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Load auth routes (login/register/password) early so they aren't shadowed
require __DIR__.'/auth.php';

// Protect Attires and Profile routes behind auth
Route::middleware('auth')->group(function () {
    // Prefer RESTful / namespaced URIs to avoid collisions
    Route::get('/', [AttiresController::class, 'welcome'])->name('welcome');
    Route::get('attires', [AttiresController::class, 'attires'])->name('attires.index');
    Route::get('attires/create', [AttiresController::class, 'create'])->name('attires.create');
    Route::post('attires', [AttiresController::class, 'store'])->name('attires.store');

    // EDIT / UPDATE / DESTROY use attires/{id}
    Route::get('attires/{id}/edit', [AttiresController::class, 'edit'])->name('attires.edit');
    Route::patch('attires/{id}', [AttiresController::class, 'update'])->name('attires.update');
    Route::delete('attires/{id}', [AttiresController::class, 'destroy'])->name('attires.destroy');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
