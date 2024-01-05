<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.index');
});
Route::get('/admin', [\App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');
Route::resource('category',\App\Http\Controllers\CategoryController::class);
Route::resource('tag',\App\Http\Controllers\TagController::class);
