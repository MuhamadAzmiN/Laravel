<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
Route::get('/home', [PostController::class, 'Home']);
    
Route::get('/about', [PostController::class, 'About'] );

Route::get('/blog', [PostController::class, 'blog'] );
// halaman single posts

Route::get('posts/{post:slug}', [PostController::class, 'slug']);
