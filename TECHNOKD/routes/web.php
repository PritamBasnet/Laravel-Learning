<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


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
Route::get('/techno', function (){
    return view('frontend.index');
});
Route::get('/category', function (){
    return view('frontend.category');
});
Route::get('/hf', function (){
    return view('frontend.hf');
});
Route::get('/common',function (){
    return view('practice.common');
});
Route::get('/practice',function (){
    return view('practice.practice');
});
Route::get('/practicex',function (){
    return view('practice.practice2');
});
Route::get('/admin/dashboard',function (){
    return view('backend.dashboard2');
});
// Route::get('/master/here',function (){
//     return view('backend.layout.master')
// });
// category  >>>
Route::post('/admin/category/storeme',[CategoryController::class,'store'])->name('storeme');
Route::get('/admin/category/index',[CategoryController::class,'index']);
Route::get('/admin/category/create',[CategoryController::class,'create']);
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('editcategory');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('updatecategory');
Route::get('/admin/category/destroy/{id}',[CategoryController::class,'destroy'])->name('delete.cat');
// Route::get('/admin/category/delete/{id}',[CategoryController::class,'destroy'])->name('DestroyCategory');

// post >>>
Route::get('/admin/post/index',[PostController::class,'index']);
Route::get('/admin/post/create',[PostController::class,'create']);
Route::get('/admin/post/edit/{id}',[PostController::class,'edit'])->name('PostEdit');
Route::post('/admin/post/store',[PostController::class,'store'])->name('storepost');
Route::post('/admin//post/update/{id}',[PostController::class,'update'])->name('UpdatePost');
Route::get('/admin/post/destroy/{id}',[PostController::class,'destroy'])->name('DeletePost');

// Route to get Fake Controller
Route::get('/admin/detail/{slog}',[FrontendController::class,'detail']);
Route::get('/category/{slug}',[FrontendController::class,'category']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/category/status/{id}', [CategoryController::class,'categorystatus'])->name('category.status');
//   Route for the search bar
Route::get('/admin/post/filter',[PostController::class,'filter'])->name('post.filter');
