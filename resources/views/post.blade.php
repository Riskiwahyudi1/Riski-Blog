@extends('layouts.main')
@section('container')
<div class="container mt-3 mb-5 col-md-6">
    <h4>{{ $post->title }}</h4>

    <p>By : <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <img src="https://source.unsplash.com/1100x400/?{{ $post->category->name }}" class="card-img" alt="...">
    <p>{!! $post->body !!}</p>

    <a href="/blog" class="text-decoration-none">Back to Posts..</a>
</div>
@endsection
    
