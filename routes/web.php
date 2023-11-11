<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\carController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\commandeController;
use App\Http\Controllers\messagesController;

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
Route::post('/login', [authController::class, "doLogin"])->name('doLogin');
// retourne la page de creation de admin
Route::get('/register', [authController::class, "register"])->name('register');
// executer le login
Route::post("register", [authController::class, "doRegister"])->name('doRegister');

//deconnecter admin
Route::get('logout', [authController::class, "logout"])->name('logout');
// retourne la page du dashboard
Route::get('/dashboard', [homeController::class, "dashboard"])->middleware('auth')->name('dashboard');
//les routes pour les client
Route::middleware(["auth"])->prefix('clients')->group(function(){
    Route::get('/', [clientController::class, "index"])->name("client");
});
//les routes pour les cars
Route::middleware(["auth"])->prefix('cars')->group(function(){
    Route::get('/', [carController::class, "index"])->name("cars");
    Route::get('/create', [carController::class, "create"])->name("create_car");
    Route::post('/create', [carController::class, "doCreate"])->name("create");
});
//les routes pour les client commandes
Route::middleware(["auth"])->prefix('commandes')->group(function(){
    Route::get('/', [commandeController::class, "index"])->name("commandes");
});
//route pour les messages
Route::middleware(["auth"])->prefix('messages')->group(function(){
    Route::get('/', [messagesController::class, "index"])->name("messages");
});
