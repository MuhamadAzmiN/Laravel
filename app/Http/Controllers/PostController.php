<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function Home(){
        return view('home', ["title" => "Home"]);
    }


    public function blog()
    {
        return view('blog', [
            "title" => "blog",
            "posts" => Post::all()
        ]);
    }
    public function About(){
        return view('about', [
            "title" => "About",
            "name" => "Muhamad Azmi Naziyulloh",
            "email" => "azmi89017@gmail.com",
            
        ]);
    }

    public function slug(Post $post){
        
        $blog_post = Post::all();
        return view('post', [
        "title" => "Single Post",
        "post" => $post
    ]);
    }


    public function category(Category $category) {
    $postingan = $category->posts;
        $pesan = '';

        if ($postingan->isEmpty()) {
            // Display a message when posts are null or empty
            $pesan = "Tidak ada";
        }

    return view('category', [
        'title' => $category->name,
        'posts' => $postingan,
        'category' => $category->name,
        'pesan' => $pesan
    ]);
}

}
