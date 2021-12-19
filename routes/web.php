<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/lists', function () {
    return view('lists.index');
});

// Route::get('/', function () {
//     return view('lists.index');
// });


Route::get('/my-day', [DashboardController::class, 'index'])->name('my-day');


// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
// Will inherit name from above
Route::post('/register', [RegisterController::class, 'store']);


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
// Will inherit name from above
Route::post('/login', [LoginController::class, 'store']);
