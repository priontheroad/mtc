<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SugestaoPontoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AnamneseController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/pacientes', [PacienteController::class, 'index']);
Route::post('/pacientes', [PacienteController::class, 'store']);
Route::get('/pacientes/{id}', [PacienteController::class, 'show']);
Route::apiResource('anamneses', AnamneseController::class);

Route::post('/pacientes/{id}/anamneses', [AnamneseController::class, 'store']);
Route::get('/anamneses/{id}', [AnamneseController::class, 'show']);

Route::get('/anamneses/{id}/sugestoes', [SugestaoPontoController::class, 'show']);
