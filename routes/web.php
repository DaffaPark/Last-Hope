<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
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
  

  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [FrontPageController::class, 'index']); 
Route::get('/category',[FrontPageController::class, 'viewCategories']);
Route::get('/latestposts',[FrontPageController::class, 'latestPosts']);
Route::get('/category/{kategori_slug}',[FrontPageController::class, 'viewCategory']);
Route::get('/category/{kategori_slug}/{post_slug}',[FrontPageController::class, 'viewPost']);
Route::post('/comments',[CommentController::class, 'store']);
Route::get('/hapus/{id}',[CommentController::class, 'destroy']);
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');


  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('kategoris', KategoriController::class);
});