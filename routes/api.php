<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TownsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\LaptopsController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\PopController;

use App\Http\Controllers\RegisterController;
//use App\Http\Controllers\API\ProductController;

use App\Models\cities;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/news', NewsController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/cars', CarController::class);

Route::apiResource('/vehicle', VehicleController::class);

Route::apiResource('/towns', TownsController::class);

Route::apiResource('/register', RegisterController::class);


Route::apiResource('/country', CountryController::class);
Route::apiResource('/phones', PhonesController::class);

Route::apiResource('/cities', CitiesController::class);
Route::apiResource('/laptops', LaptopsController::class);

Route::apiResource('/currency', CurrencyController::class);

Route::apiResource('/pop', PopController::class);

Route::group(['middleware' => ['cors', 'json.response']], function () {
    // ...
    // public routes
    //Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/register','Auth\ApiAuthController@register')->name('register.api');
    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');

    // ..


});
Route::post('register', [RegisterController::class, 'register']);
// Route::post('login', [RegisterController::class, 'login']);
//  Route::middleware('auth:api')->group( function () {
//  //Route::resource('products', ProductController::class);
// });
