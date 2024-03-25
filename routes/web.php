<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Models\Category;
use App\Models\User;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/post/{post:slug}', [HomeController::class, 'post']);

Route::get('/category/{category:slug}', function(Category $category){
    return view('posts', [
        
        'title' =>  "Post By category :  $category->name ",
        'active' => 'Categories',
        'posts' => $category->posts->load(['author', 'category']) ,
        'category' =>  $category->name,
    ]);
    
});

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Daftar Category',
        'active' => 'Categories',
        'categories' => Category::all(),
    ]);
});
Route::get('/author/{user:username}', function (User $user){
    return view('posts', [
        "title" => "Post By author :  $user->name ",
        'active' => 'author',
        "user" => "$user->name",
        "posts" => $user->posts->load(['author', 'category']),
    ]);
});
    


