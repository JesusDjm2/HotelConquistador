<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RutasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('Conquistador-Hotel', [RutasController::class, 'index'])->name('index');
Route::get('Hotel-Conquistador', [RutasController::class, 'inicio'])->name('inicio');

//Vistas en español
Route::get('nosotros', [RutasController::class, 'nosotros'])->name('nosotros');

Route::get('contacto', [RutasController::class, 'contacto'])->name('contacto');