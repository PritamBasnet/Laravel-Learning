<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/edit',function (){
    return view('product.edit');
});
Route::get('/create',[ProductController::class,'create']);
Route::get('/index',[ProductController::class,'index']);
Route::post('/store',[ProductController::class,'store'])->name('storing');
Route::get('/delete/{id}',[ProductController::class,'deletedata'])->name('delteme');
Route::get('/update/{id}',[ProductController::class,'PassData']);
Route::post('/updateme',[ProductController::class,'updatedata'])->name('updating');
