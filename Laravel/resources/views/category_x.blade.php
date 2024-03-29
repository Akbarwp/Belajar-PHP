@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($posts as $post)
<article class="mb-5 border-bottom">
    <h1>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h1>
    <p>By. <a href="/users" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more ...</a>
</article>
@endforeach

<a href="/posts">Back to Posts</a>

@endsection