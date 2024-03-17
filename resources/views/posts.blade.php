
@extends('layouts.main')
@section('container')
    <h3 class="mt-3">{{ $title }}</h3>
</small>
          
    <div class="card text-bg-dark mt-3">
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title text-white"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-white">{{ $posts[0]->title }}</a></h5>
          <p class="card-text text-white"><p>{{ $posts[0]->excerpt }}</p></p>
          <small>By : <a href="/author/{{ $posts[0]->author->username }}" class="text-white">{{ $posts[0]->author->name }}</a> in <a href="/category/{{ $posts[0]->category->slug }}" class="text-white">{{ $posts[0]->category->name }}</a>   {{ $posts[0]->created_at->diffForHumans() }}<p><a href="/post/{{ $posts[0]->slug }} " class="text-decoration-none btn btn-warning mt-3 text-white">Read More</a></p>
        </div>

      </div>
      <div class="container mt-4">
        <div class="row">
            @foreach ($posts->skip(1) as $post)                
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="position-absolute text-white "><p>{{ $post->category->name }} </p></div>
                        <img src="https://source.unsplash.com/600x400/?{{ $post->category->name }}" class="card-img" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                        <small>By : <a href="/author/{{ $post->author->username }}" class="text-decoration-none ">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
                        <p class="card-text mt-3">{{ $post->excerpt }}</p>
                        <p><a href="/post/{{ $post->slug }} " class="text-decoration-none btn btn-warning  text-white">Read More</a></p>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
      </div>

@endsection