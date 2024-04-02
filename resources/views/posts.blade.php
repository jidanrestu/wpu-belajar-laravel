@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Halaman Posts</h1>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>
                By. <a href="/authors/{{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a>
                | <a class="text-decoration-none"
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read More..</a>
        </article>
    @endforeach
@endsection
