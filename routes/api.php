<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::get('home', [ProductController::class, 'index']);
Route::get('details/{data}', [ProductController::class, 'show']);
Route::get('type/{id}', [ProductController::class, 'type']);
Route::get('category/{id}', [ProductController::class, 'category']);

Route::middleware(['auth:sanctum'])->group(function () {


    Route::post('create', [ProductController::class, 'store']);
    Route::put('edit/{product}', [ProductController::class, 'update']);
    Route::delete('delete/{product}', [ProductController::class, 'destroy']);
    Route::get('profile', [AuthController::class, 'profile']);
    Route::put('profile/edit', [AuthController::class, 'update']);



    Route::post('logout', [AuthController::class, 'logout']);
});




