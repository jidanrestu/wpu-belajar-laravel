@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-4">
                    <h2>{{ $post['title'] }}</h2>
                    <img src="https://random-image-pepebigotes.vercel.app/api/random-image" alt="gambar random"
                        class="img-fluid my-2">
                    <p>
                        By. <a href="/authors/{{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a>
                        | <a class="text-decoration-none"
                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </p>
                    {!! $post['body'] !!}
                    <a class="btn btn-primary" href="/posts">Go back to Posts</a>
                </article>
            </div>
        </div>
    </div>
@endsection
