
@extends('layouts.main')
@section('container')

    @foreach ($posts as $post)
    <article class="mt-4 border-bottom pb-2">
        <h4>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h4>
        <p>By : <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <p><a href="/post/{{ $post->slug }} " class="text-decoration-none">Read More...</a></p>

    </article>


    @endforeach

@endsection