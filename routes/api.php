<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProductController;

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

Route::get('dashboard', [ProductController::class, 'index']);
Route::get('details/{data}', [ProductController::class, 'show']);
Route::get('type/{id}', [ProductController::class, 'type']);



Route::post('create', [ProductController::class, 'store']);
Route::put('edit/{product}', [ProductController::class, 'update']);
Route::delete('delete/{product}', [ProductController::class, 'destroy']);


