<?php

use App\Http\Controllers\CommentController;
use App\Models\posts;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostsController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('posts',[PostsController::class,'index']);

Route::get('posts/create',[PostsController::class,'create']);

Route::post('posts/store',[PostsController::class,'store']);

Route::get('postsshow/{id}',[PostsController::class,'show']);

Route::get('postedit/{id}',[PostsController::class,'edit']);

Route::post('postupdate/{id}',[PostsController::class,'update']);

Route::get('postdelete/{id}',[PostsController::class,'destroy']);

// Route::resource('comment',[CommentController::class]);
Route::get('comment',[CommentController::class,'index']);

Route::get('comment/create',[CommentController::class,'create']);

Route::post('comment/store',[CommentController::class,'store']);
