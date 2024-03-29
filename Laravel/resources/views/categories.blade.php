@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">
                        <div class="card bg-dark text-light">
                            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3"
                                    style="background-color: rgba(24,24,27, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Tanpa Design --}}
    {{-- @foreach ($categories as $category)
        <article class="mb-5">
            <ul>
                <li>
                    <h3>
                        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                    </h3>
                </li>
            </ul>
        </article>
    @endforeach --}}
@endsection
