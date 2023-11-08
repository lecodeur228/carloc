<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
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

// retourne la page connexion de admin
Route::get('/', [authController::class, "login"])->name('login');
// retourne la page de creation de admin
Route::get('/register', [authController::class, "register"])->name('register');
// retourne la page du dashboard
Route::get('/dashboard', [homeController::class, "dashboard"])->name('dashboard');
