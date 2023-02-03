@extends('Layout.main')

@section('content')
    <h1 class="mb-5">{{ $title }}</h1>
    <div class="container mb-5">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">
                                    {{ $category->name }}</h5>
                                {{-- <a href="{{ url('categories') }}/{{ $category->slug }}">{{ $category->name }}</a> --}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <div class="mb-5">
        @foreach ($categories as $category)
            <ul>
                <li>
                    <h2>
                        
                    </h2>
                </li>
            </ul>
        @endforeach
    </div> --}}
    <a class="" href="{{ url('posts') }}">Back to news</a>
@endsection
