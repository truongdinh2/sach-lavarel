<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticalController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;
use App\Models\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// })-> name('home');
Route::post('/welcome', function (Request $request) {
    $data = $request -> id;
    // dd($request -> id);
    return response() -> json($data);
});
Route::get('/bai-viet-1', function () {
    return 'Hello World';
});
Route::resource('/bai-viet', ArticalController::class);
Route::get('/', [ProductController::class, 'index']);
Route::post('/', [OrderController::class, 'add']);
Route::get('/user/{user}', function ($user) {
    $userAll = User::all();
    return $userAll[0] -> name;
})->middleware('checkpermission');
