<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // kalau $fillable adalah yg di dalam aray adalah yg harus di isi
    // protected $fillable = ['title', 'excerpt', 'body'];

    // kalau $guarded yg di dalam aray gak boleh di isi sedangakan yang di lain nya boleh di isi
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
