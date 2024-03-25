
@extends('layouts.main')
@section('container')
<div class="container mt-3">
    <h2>Daftar Categories</h2>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/600x400/?{{ $category->name }}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                        <h5 class="card-title"><a href="/category/{{ $category->slug }}" class="text-decoration-none text-white">{{ $category->name }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
@endsection
