<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/privada', "home")->middleware('auth')->name('privada');
Route::view('/registro', "register")->name('registro');

Route::get('/api/v1/perfiles', function () {
    return view('perfiles', ['userData' => $responseData]);
}); 

Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/login', [LoginController::class, 'login'])->name('login');
