<?php

use App\Http\Controllers\DbController;
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

Route::view('/','welcome');

Route::post('insert',[DbController::class,'inserts']);

Route::get('edit/{id}',[DbController::class,'edit']);

Route::post('update/{id}',[DbController::class,'updates']);


Route::get('delete/{id}',[DbController::class,'delete']);