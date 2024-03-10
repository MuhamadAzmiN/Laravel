<?php

namespace App\Http\Controllers;
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
}
