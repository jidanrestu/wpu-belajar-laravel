@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-4">
                    <h2>{{ $post['title'] }}</h2>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid my-2">
                    @else
                        <img src="https://random-image-pepebigotes.vercel.app/api/random-image" alt="gambar random"
                            class="img-fluid my-2">
                    @endif
                    <p>
                        By. <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a>
                        | <a class="text-decoration-none"
                            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </p>
                    {!! $post['body'] !!}
                    <a class="btn btn-primary" href="/posts">Go back to Posts</a>
                </article>
            </div>
        </div>
    </div>
@endsection
