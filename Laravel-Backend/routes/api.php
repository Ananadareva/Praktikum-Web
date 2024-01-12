<?php

use App\Http\Controllers\PostController;
use App\Http\Middleware\Authenticate;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::middleware(['auth:sanctum'])->group(function () {;
    Route::get('/logout', [AuthenticationController::class, 'logout']);
    Route::get('/me', [AuthenticationController::class, 'me']);

    Route::post('/posts', [PostController::class, 'store']);
    Route::patch('/posts/{id}', [PostController::class, 'update'])->middleware('PostOwner');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('PostOwner');


    Route::post('/comment/{id}', [CommentController::class, 'storeComment']);
    Route::patch('/comment/{id}', [CommentController::class, 'updateComment'])->middleware('CommentOwner');
    Route::delete('/comment/{id}', [CommentController::class, 'destroyComment'])->middleware('CommentOwner');
});
Route::get('/posts/{post_id}/comment', [CommentController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/posts2/{id}', [PostController::class, 'show2']);
