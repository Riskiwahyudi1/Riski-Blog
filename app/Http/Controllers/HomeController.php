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
        return view('Posts', [
            "title" => 'All Posts',
            "posts" => Post::with(['author', 'category'])->latest()->get(),
        ]);
    }

    public function post(Post $post){            
            
        return view('post', [
            "title" => " single Post",
            "post" => $post,
        ]);
    }
}


