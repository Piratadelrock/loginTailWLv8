<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [LoginController::class, 'create'])->name('login');

Route::get('/', function () {
    return view('welcome');
})->name('/');
