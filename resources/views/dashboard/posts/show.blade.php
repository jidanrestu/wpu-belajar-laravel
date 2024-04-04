@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article class="mb-4">
                    <h2>{{ $post->title }}</h2>
                    <div class="mt-3">
                        <a class="btn btn-success" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back</a>
                        <a class="btn btn-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><span
                                data-feather="edit"></span> Edit</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <span data-feather="trash-2"></span> Delete
                            </button>
                        </form>
                    </div>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid my-3">
                    @else
                        <img src="https://random-image-pepebigotes.vercel.app/api/random-image" alt="gambar random"
                            class="img-fluid my-3">
                    @endif
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
