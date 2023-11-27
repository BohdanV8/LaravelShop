<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('authorisation');
});

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/registration', function () {
    return view('registration');
});

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/auth', [UserController::class, 'auth'])->name('auth');
