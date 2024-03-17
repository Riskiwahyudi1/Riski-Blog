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
    return view('category', [
        
        'title' =>  $category->name ,
        'posts' => $category->posts ,
        'category' =>  $category->name,
    ]);
    
});

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Daftar Category',
        'categories' => Category::all(),
    ]);
});
Route::get('/author/{user:username}', function (User $user){
    return view('blog', [
        "title" => "user post",
        "user" => "$user->name",
        "posts" => $user->posts,
    ]);
});
    


