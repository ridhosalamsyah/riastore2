<?php

use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->middleware('auth');
Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->middleware('auth');
Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->middleware('auth');
Route::put('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->middleware('auth');
Route::delete('/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->middleware('auth');
Route::get('/show/{id}', [App\Http\Controllers\ProductController::class, 'show'])->middleware('auth');
Route::get('/blog', [App\Http\Controllers\ProductController::class, 'blog'])->middleware('auth');

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('auth');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->middleware('auth');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->middleware('auth');
Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->middleware('auth');
Route::put('/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->middleware('auth');
Route::delete('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->middleware('auth');
Route::get('/category/find/{id}', [App\Http\Controllers\CategoryController::class, 'find'])->middleware('auth');


