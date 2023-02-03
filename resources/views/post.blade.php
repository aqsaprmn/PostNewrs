@extends('Layout.main')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By: <a class="text-decoration-none mb-2"
                        href="{{ url('authors') }}/{{ $post->author->username }}">{{ $post->author->name }}</a>
                    in
                    <a class="text-decoration-none"
                        href="{{ url('categories') }}/{{ $post->category->name }}">{{ $post->category->name }}</a>
                </p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class=" img-fluid"
                    alt="{{ $post->category->name }}">

                <article class="fs-5">
                    <p>{!! $post->body !!}</p>
                </article>


                <a href="{{ url('posts') }}">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
