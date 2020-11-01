<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\API\UserController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route ::get('/test',function (){
   
    echo "Welcome api";
});



//City-Resources
Route::resource('city', CityController::class);

//User-Resources
Route::resource('user', UserController::class);

