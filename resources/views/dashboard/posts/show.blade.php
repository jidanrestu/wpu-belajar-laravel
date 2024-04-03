@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article class="mb-4">
                    <h2>{{ $post->title }}</h2>
                    <div class="mt-3">
                        <a class="btn btn-success" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back</a>
                        <a class="btn btn-warning" href=""><span data-feather="edit"></span> Edit</a>
                        <a class="btn btn-danger" href=""><span data-feather="trash-2"></span> Delete</a>
                    </div>
                    <img src="https://random-image-pepebigotes.vercel.app/api/random-image" alt="gambar random"
                        class="img-fluid my-3">
                    {!! $post->body !!}
                    <a class="btn btn-primary" href="/posts">Go back to Posts</a>
                </article>
            </div>
        </div>
    </div>
@endsection
