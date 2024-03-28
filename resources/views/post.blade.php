@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post['judul'] }}</h2>
        <h5>By : {{ $post['author'] }}</h5>
        <p>{{ $post['content'] }}</p>
    </article>
    <a class="btn btn-primary" href="/blog">Go back</a>
@endsection
