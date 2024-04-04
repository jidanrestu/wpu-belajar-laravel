@extends('layouts.main')

@section('content')
    <h1 class="mb-2 text-center">{{ $title }}</h1>

    <form action="" method="get">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search.." aria-label="Search.."
                aria-describedby="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit" id="search">Search</button>
        </div>
    </form>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="card-img-top">
                </div>
            @else
                <img src="https://random-image-pepebigotes.vercel.app/api/random-image" class="card-img-top"
                    alt="gambar random">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p class="card-text">
                    <small class="text-muted">
                        <p>
                            By. <a href="/posts?author={{ $posts[0]->author->username }}"
                                class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                            | <a class="text-decoration-none"
                                href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
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
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="card-img-top">
                            @else
                                <img src="https://random-image-pepebigotes.vercel.app/api/random-image" class="card-img-top"
                                    alt="gambar random">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <p>
                                            By. <a href="/posts?author={{ $post->author->username }}"
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

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
