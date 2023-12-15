<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/data', [DataController::class,
'show'])->name('show');


Route::post('/submit-data', [DataController::class,
'submitData'])->name('submit-data'
);
Route::get('/', function () {
return redirect()->route('show-form-data'); 
}) ;


