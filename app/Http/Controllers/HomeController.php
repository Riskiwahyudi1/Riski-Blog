<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller{

    public function index(){

        return view('home', [
            "title" => "Home",
            'active' => 'Home',
        ]);
    }
    public function about(){
        return view('about', [
            "title" => "About",
            "nama" => "Riski Wahyudi",
            'active' => 'About',
        ]);
    }
    public function blog(){
        $posts = Post::latest();

        if(request('search')){
            $posts->where('title', 'like', '%' . request('search') . '%')
                  ->orwhere('body', 'like', '%' . request('search') . '%');
        }
        return view('Posts', [
            "title" => 'All Posts',
            'active' => 'Blog',
            "posts" => $posts->get(),
        ]);
    }

    public function post(Post $post){            
            
        return view('post', [
            "title" => " single Post",
            'active' => 'posts',
            "post" => $post,
        ]);
    }
}


