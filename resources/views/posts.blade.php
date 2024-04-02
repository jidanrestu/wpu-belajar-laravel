@extends('layouts.main')

@section('content')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://picsum.photos/id/1/1920/540" class="card-img-top" alt="Gambar laptop">
            <div class="card-body">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p class="card-text">
                    <small class="text-muted">
                        <p>
                            By. <a href="/authors/{{ $posts[0]->author->username }}"
                                class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                            | <a class="text-decoration-none"
                                href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                            | {{ $posts[0]->created_at->diffForHumans() }}
                        </p>
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <p class="card-text">
                    <a class="text-decoration-none" href="/posts/{{ $posts[0]->slug }}">Read More..</a>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute bg-dark px-3 py-2" style="opacity: 0.75">
                                <a class="text-decoration-none text-light"
                                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://random-image-pepebigotes.vercel.app/api/random-image" class="card-img-top"
                                alt="gambar random">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <p>
                                            By. <a href="/authors/{{ $post->author->username }}"
                                                class="text-decoration-none">{{ $post->author->name }}</a>
                                            | {{ $post->created_at->diffForHumans() }}
                                        </p>
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

@endsection
