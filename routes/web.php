<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/view',[HomeController::class,'view'])->name('view');
Route::get('/delete/{id}',[HomeController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[HomeController::class,'update'])->name('update');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/registerdata',[HomeController::class,'registerdata'])->name('registerdata');