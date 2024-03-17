
@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <h2>Daftar Categories</h2>
    @foreach ($categories as $category)
    <p>
        <a href="/category/{{ $category->slug }}">{{ $category->name }}</a>

    </p>
    @endforeach

</div>
@endsection
