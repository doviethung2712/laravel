<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;

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
// Route::middleware('auth:api')->group(function(){
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::delete('products/delete/{id}', [ProductController::class, 'destroy']);
Route::post('products/create', [ProductController::class, 'store']);
Route::put('products/eidt/{id}', [ProductController::class, 'update']);
// });
Route::resource('products',ProductController::class);