<?php

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
Route::get('/home', function () {
    return view('home', ["title" => "Home"]);
});
    
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhamad Azmi Naziyulloh",
        "email" => "azmi89017@gmail.com",
        
    ]);
});

Route::get('/blog', function () {
    $blog_post = Post::all();
    return view('blog', [
        "title" => "blog",
        "posts" => $blog_post
    ]);
}); 
// halaman single posts

Route::get('posts/{slug}', function($slug){
    $blog_post = Post::all();
    // $new_post = [];
    // foreach($blog_post as $post){
    //     if($post["slug"] === $slug){
    //         $new_post = $post;
    //     }
    // }
    
    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});
