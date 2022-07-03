<?php

use App\Http\Controllers\PostController;
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

Route::get('index',[PostController::class,'index'])->name('post.index');
Route::get('create',[PostController::class,'create'])->name('post.create');
Route::post('create',[PostController::class,'store'])->name('post.store');
Route::get('detail/{id}',[PostController::class,'show'])->name('post.detail');
Route::get('update/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('delete/{id}',[PostController::class,'detroy'])->name('post.delete');
