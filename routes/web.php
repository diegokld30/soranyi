<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;





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
    return view('welcome');
});

Route::get('/register',[RegisterController::class, 'index'])->name
('register')->middleware("guest");
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/user/{user:username}', [PostController::class, 'index']) -> name('post.index');

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware("guest");
Route::post('/login',[LoginController::class,'store']);
Route::post('/logout',[LogoutController::class,'store'])->name('logout');
Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');