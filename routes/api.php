<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\AuthController;

Route::post('login', [AuthController::class, 'login']);
Route::middleware('jwt')->group(function () {
    Route::apiResource('produtos', ProdutoController::class);
    Route::apiResource('vendas', VendaController::class);
});