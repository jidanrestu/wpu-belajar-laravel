@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <p>
            By. <a href="/categories/{{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a>
            | <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        {!! $post['body'] !!}
    </article>
    <a class="btn btn-primary" href="/posts">Go back to Posts</a>
@endsection
