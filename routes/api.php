<?php

use App\Http\Controllers\API\APIEnsalamentoController;
use App\Http\Controllers\API\APISalaController;
use App\Http\Controllers\API\APIUCController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/ensalamento/gerar', [APIEnsalamentoController::class, 'gerar']);
Route::get('/ensalamento', [APIEnsalamentoController::class, 'mostrarEnsalamento']);
Route::get('/ensalamento/criar', [APIEnsalamentoController::class, 'store']);
Route::get('/ensalamento/{id}/editar', [APIEnsalamentoController::class, 'update']);

Route::get('/uc', [APIUCController::class, 'index']);

Route::get('/sala', [APISalaController::class, 'index']);