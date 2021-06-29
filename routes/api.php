<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('gebruikers', [App\Http\Controllers\UserController::class, 'index']);
Route::get('werktijden', [App\Http\Controllers\WerktijdenController::class, 'index']);
Route::get('werktijden/{id}', [App\Http\Controllers\WerktijdenController::class, 'show']);
Route::get('werktijden/gebruiker/{id}', [App\Http\Controllers\WerktijdenController::class, 'gebruikerWerktijden']);


Route::middleware('auth:sanctum')->group(function() {
    Route::get('user', [App\Http\Controllers\AuthController::class, 'user']);
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
});
