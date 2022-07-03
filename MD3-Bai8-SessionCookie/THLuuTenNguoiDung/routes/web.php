<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::get('login',[LoginController::class,'showLogin'])->name('showLogin');
Route::post('/login', [LoginController::class,'login'])->name('user.login');
Route::get('/blog', [BlogController::class, 'showBlog'])->name('show.blog');
Route::get('logout',[LogoutController::class,'logout'])->name('user.logout');



