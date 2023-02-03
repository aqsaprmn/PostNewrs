@extends('Layout.main')

@section('content')
    <h1 class="mb-3 mt-4">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class=" text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p> <small class="text-muted">By: <a class="text-decoration-none"
                            href="{{ url('authors') }}/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                        in
                        <a class="text-decoration-none"
                            href="{{ url('categories') }}/{{ $posts[0]->category->name }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">Read more...</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $p)
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div style="background-color: rgba(0,0,0,0.7)" class="position-absolute px-3 py-2">
                            <a href="/categories/{{ $p->category->name }}"
                                class=" text-white text-decoration-none">{{ $p->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top"
                            alt="{{ $p->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <p> <small class="text-muted">By: <a class="text-decoration-none"
                                        href="{{ url('authors') }}/{{ $p->author->username }}">{{ $p->author->name }}</a>
                                    {{ $p->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $p->excerpt }}</p>
                            <a href="/posts/{{ $p->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- @foreach ($posts->skip(1) as $p)
        <article class="mb-3 border-bottom pb-3">
            <h2><a class="text-decoration-none" href="{{ url('posts') }}/{{ $p->slug }}">{{ $p->title }}</a>
            </h2>

            <small>By: <a class="text-decoration-none"
                    href="{{ url('authors') }}/{{ $p->author->username }}">{{ $p->author->name }}</a>
                in
                <a class="text-decoration-none"
                    href="{{ url('categories') }}/{{ $p->category->name }}">{{ $p->category->name }}</a></small>

            <p>{{ $p->excerpt }}</p>

            <a class="text-decoration-none" href="/posts/{{ $p->slug }}">Read more...</a>
        </article>
    @endforeach --}}
@endsection
