<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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

Route::get('/rumpi.com/login', [AuthController::class, 'login'])->name('login');
Route::post('/rumpi.com/login', [AuthController::class, 'authenticating']);
Route::get('/rumpi.com/logout', [AuthController::class, 'logout']);

Route::get('/rumpi.com/home', [PostController::class, 'index'])->name('home');
Route::get('/rumpi.com/create_post', [PostController::class, 'create'])->name('post.create');
Route::post('/rumpi.com/store', [PostController::class, 'store'])->name('post.store');
Route::get('/rumpi.com/edit_pos/{idPost}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/rumpi.com/update/{idPost}', [PostController::class, 'update'])->name('post.update');
Route::post('/rumpi.com/delete/{idPost}', [PostController::class, 'destroy'])->name('post.delete');


Route::get('/rumpi.com/{idPost}/comment}', [CommentController::class, 'showComment'])->name('comment.show');
//Route::get('/rumpi.com/comment}', [CommentController::class, 'showComment'])->name('comment');

Route::get('/rumpi.com/{idLogin}', [ProfileController::class, 'showProfile'])->name('profile.show');
