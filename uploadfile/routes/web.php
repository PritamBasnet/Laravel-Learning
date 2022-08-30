<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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

// Route::get('/upload',function (){
//     return view('_post');
// });
Route::view('upload','_post');
// Route::post('/file',[App\Http\Controllers\fileupload::class,'index'])->name('store');
Route::post('upload',[App\Http\Controllers\fileupload::class,'index']);
