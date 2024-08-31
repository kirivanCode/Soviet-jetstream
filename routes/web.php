<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalculatorController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Ruta para el formulario de contacto
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Ruta para la calculadora
Route::view('/calculator', 'calculator')->name('calculator');
Route::post('/calculate', [CalculatorController::class, 'calculate'])->name('calculate');
