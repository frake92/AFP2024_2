<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/regisztracio', function () {
    return view('regisztracio');
});

Route::post('/regisztralas', [ProfileController::class, 'regisztralas'])->name('user.regisztralas');

Route::get('/belepes', function () {
    return view('belepes');
})->name('belepes');

Route::get('/loggedin', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('loggedin');

Route::get('/futar', function () {
    return view('futar');
})->middleware(['auth', 'verified'])->name('futar');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/restaurant/create', [RestaurantController::class, 'create'])->name('restaurant.create');
Route::post('/restaurant', [RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/restaurant/{restaurant}/edit', [RestaurantController::class, 'edit'])->name('restaurant.edit');
Route::put('/restaurant/{restaurant}/update', [RestaurantController::class, 'update'])->name('restaurant.update');
Route::delete('/restaurant/{restaurant}/destroy', [RestaurantController::class, 'destroy'])->name('restaurant.destroy');

require __DIR__.'/auth.php';
