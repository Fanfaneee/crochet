<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);


Route::resource('/blog', PostsController::class);
Route::post('/blog/{slug}/comment', [PostsController::class, 'storeComment'])->name('posts.comment');
Route::post('/comments/{comment}/like', [PostsController::class, 'likeComment'])->name('comments.like');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pattern', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::post('/gallery/upload', [PagesController::class, 'uploadImage'])->name('gallery.upload');

