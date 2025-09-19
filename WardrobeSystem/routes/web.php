<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttiresController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AttiresController::class, 'welcome'])->name('welcome');
Route::get('attires', [AttiresController::class, 'attires'])->name('attires');
Route::put('create', [AttiresController::class, 'create'])->name('create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__.'/auth.php';
