@extends('layouts.main')
@section('container')
<div class="container mt-5 mb-5">
    <h4>{{ $post->title }}</h4>

    <p>By : <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p>{!! $post->body !!}</p>

    <a href="/blog" class="text-decoration-none">Back to Posts..</a>
</div>
@endsection
    
