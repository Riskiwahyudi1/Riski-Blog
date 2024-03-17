
@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <h1>Post Category : {{ $title }}</h1>
    @foreach ($posts as $post)
    <h4>
        <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
    </h4>
    <p>{{ $post->excerpt }}</p>
    @endforeach
    <a href="/categories">All Categories</a>

</div>
@endsection