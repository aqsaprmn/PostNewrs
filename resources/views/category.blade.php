@extends('Layout.main')

@section('content')
    <h1 class="mb-5">Post Category: {{ $category }}</h1>
    @foreach ($posts as $p)
        <article class="mb-2">
            <h2><a href="{{ url('posts') }}/{{ $p->slug }}">{{ $p->title }}</a></h2>

            <p>{{ $p->excerpt }}</p>
        </article>
    @endforeach

    <a href="{{ url('posts') }}">Back to posts</a>
@endsection
