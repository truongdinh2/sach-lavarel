<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticalController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;

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
// Route::get('/bai-viet', [ArticalController::class, 'show']);
// Route::post('/', [OrderController::class, 'add']);
Route::post('/san-pham', [ProductController::class, 'add']);
Route::post('/san-pham/:id/edit', [ProductController::class, 'edit']);
Route::delete('/san-pham', [ProductController::class, 'delete']);
Route::post('/order', [OrderController::class, 'add']);
