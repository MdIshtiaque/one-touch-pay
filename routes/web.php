<?php

use App\Http\Controllers\UserAppRegisterController;
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
    return view('pages.landing');
})->name('landing');

Route::get('app-register', [UserAppRegisterController::class, 'appRegister'])->name('user.appRegister');
Route::get('register', [UserController::class, 'register'])->name('user.register');