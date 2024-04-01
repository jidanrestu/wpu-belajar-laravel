@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post['title'] }}</h2>
        {!! $post['body'] !!}
    </article>
    <a class="btn btn-primary" href="/posts">Go back</a>
@endsection
