<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TownsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NewsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/cars', CarController::class );

Route::apiResource('/vehicle', VehicleController::class );

Route::apiResource('/towns', TownsController::class );

Route::apiResource('/register', RegisterController::class );

Route::apiResource('/news', NewsController::class );