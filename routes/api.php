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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('products', 'Api\ProductsController');
Route::apiResource('categories', 'Api\CategoriesController');

Route::apiResource('brands', 'Api\BrandsController');
Route::apiResource('places', 'Api\PlacesController');
Route::apiResource('producers', 'Api\ProducersController');
