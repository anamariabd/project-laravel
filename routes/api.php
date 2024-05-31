<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1/perfiles')->group(function () {
    Route::get('/',[ PerfilController::class, 'get']);
    Route::post('/',[ PerfilController::class, 'create']);
    Route::delete('/{id}',[ PerfilController::class, 'delete']);
    Route::get('/{id}',[ PerfilController::class, 'getById']);
    Route::put('/{id}',[ PerfilController::class, 'update']);
});