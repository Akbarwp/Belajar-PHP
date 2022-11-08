@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $category->name }}</h1>

                <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my categories</a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                <div class="card bg-dark text-light mt-3">
                    {{-- Menampilkan gambar bila ada atau tidak --}}
                    @if ($category->image)
                        <div style="max-height: 500px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $category->image) }}" class="card-img-top img-fluid rounded mt-3" alt="{{ $category->name }}">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection