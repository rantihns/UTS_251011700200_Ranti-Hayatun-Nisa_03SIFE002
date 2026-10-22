<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CraftController;

Route::get('/', [CraftController::class, 'home'])->name('home');
Route::get('/katalog', [CraftController::class, 'index'])->name('craft.index');
Route::get('/craft/{id}', [CraftController::class, 'show'])->name('craft.show');