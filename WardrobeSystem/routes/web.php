<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttiresController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('attires', [AttiresController::class, 'attires'])->name('attires');

Route::get('create', [AttiresController::class, 'create'])->name('create');

Route::post('store', [AttiresController::class, 'store'])->name('attires.store');

Route::get('/{id}/edit', [AttiresController::class, 'edit'])->name('edit');

Route::patch('/{id}', [AttiresController::class, 'update'])->name('update');

Route::delete('/{id}/destroy', [AttiresController::class, 'destroy'])->name('destroy');
