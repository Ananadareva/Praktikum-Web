<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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
    return view('welcome');
});


Route::get('/UPMoney', [MainController::class, 'dashboard'])->name('dashboard');


Route::post('/UPMoney/storeTransaction', [MainController::class, 'storeTransaction'])->name('storeTransaction');

Route::get('/UPMoney/login', [AuthController::class, 'login'])->name('login');
Route::post('/UPMoney/login', [AuthController::class, 'authenticating']);



