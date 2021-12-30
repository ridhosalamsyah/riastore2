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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('checkRole:admin');;
Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->middleware('checkRole:admin');
Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->middleware('checkRole:admin');
Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->middleware('checkRole:admin');
Route::put('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->middleware('checkRole:admin');
Route::delete('/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->middleware('checkRole:admin');
Route::get('/show/{id}', [App\Http\Controllers\ProductController::class, 'show'])->middleware('checkRole:admin');
Route::get('/blog', [App\Http\Controllers\ProductController::class, 'blog'])->middleware('checkRole:admin');

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('checkRole:admin');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->middleware('checkRole:admin');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->middleware('checkRole:admin');
Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->middleware('checkRole:admin');
Route::put('/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->middleware('checkRole:admin');
Route::delete('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->middleware('checkRole:admin');
Route::get('/category/find/{id}', [App\Http\Controllers\CategoryController::class, 'find'])->middleware('checkRole:admin');

Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
