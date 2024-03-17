<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller{

    public function index(){
        return view('home', [
            "title" => "Home",
        ]);
    }
    public function about(){
        return view('about', [
            "title" => "About",
            "nama" => "Riski Wahyudi",

        ]);
    }
    public function blog(){
        return view('blog', [
            "title" => "Posts",
            "posts" => Post::all(),
        ]);
    }

    public function post(Post $post){            
            
        return view('posts', [
            "title" => " single Post",
            "post" => $post,
        ]);
    }
}


