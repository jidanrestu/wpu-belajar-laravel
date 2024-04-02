@extends('layouts.main')

@section('content')
    <h1 class="mb-2 text-center">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://random-image-pepebigotes.vercel.app/api/random-image" class="card-img"
                                alt="gambar random">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center p-0">
                                <h5 class="card-title bg-dark px-3 py-2 text-center flex-fill" style="opacity: 0.75">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
