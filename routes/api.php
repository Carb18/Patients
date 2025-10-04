<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PacienteController;
use App\Http\Controllers\Api\AuthController;

// Rutas de Autenticación (Públicas)
Route::post('login', [AuthController::class, 'login']);

// Rutas protegidas por autenticación (para el CRUD de pacientes)
// Usamos el middleware 'auth:sanctum'
Route::middleware('auth:sanctum')->group(function () {

    // API Resource para la gestión completa de pacientes (CRUD)
    Route::apiResource('pacientes', PacienteController::class);

    // Rutas de sesión protegidas
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'user']);
});