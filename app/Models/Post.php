<?php

namespace App\Models;

class Post 
{
  private static $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhamad Azmi Naziyulloh",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium sit autem, dicta inventore rem, ipsam itaque iure consequatur qui laboriosam velit error est officia eius iste mollitia neque excepturi consequuntur."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium sit autem, dicta inventore rem, ipsam itaque iure consequatur qui laboriosam velit error est officia eius iste mollitia neque excepturi consequuntur.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium sit autem, dicta inventore rem, ipsam itaque iure consequatur qui laboriosam velit error est officia eius iste mollitia neque excepturi consequuntur
            "
        ]

    ];


    public static function all(){
        return self::$blog_post;    
    }

    public static function find($slug)
    {
            $posts = self::$blog_post;
            $post = [];
            foreach($posts as $p){
            if($p["slug"] === $slug){
                $post = $p;
            }
        }
             return $post;
    }
}
