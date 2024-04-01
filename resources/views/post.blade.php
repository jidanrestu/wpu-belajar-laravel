@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <p>By. Jidan Restu Kurniawan <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post['body'] !!}
    </article>
    <a class="btn btn-primary" href="/posts">Go back</a>
@endsection
