<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/cars', [CarController::class, 'index'])->middleware('auth:api');
Route::get('/cars/{car}', [CarController::class, 'show'])->middleware('auth:api');
Route::post('/cars', [CarController::class, 'store'])->middleware('auth:api');
Route::put('/cars/{car}', [CarController::class, 'update'])->middleware('auth:api');
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->middleware('auth:api');

Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/me', [AuthController::class, 'getActiveUser'])->middleware('auth:api');
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:api');

Route::post('/auth/refresh', [AuthController::class, 'refreshToken']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

