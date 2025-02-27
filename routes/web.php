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

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/pattern', [\App\Http\Controllers\PagesController::class, 'pattern'])->name('pattern');
Route::get('/gallery', [\App\Http\Controllers\PagesController::class, 'gallery'])->name('gallery');
Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'contact'])->name('contact');




