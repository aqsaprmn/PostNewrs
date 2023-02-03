
@extends('Layout.main')

@section('content')

<h1>About Page</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="asset/img/{{ $image }}" alt="{{ $image }}" width="200">

@endsection