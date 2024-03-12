
@extends('layout.main')
@section('container')
<h1>Post Category </h1>
@foreach ($categories as $category)

    <h2>
        <a href="{{ BASEURL }}/categories/{{ $category->slug }}">{{ $category->name }}</a>
    </h2>

    
@endforeach
    
@endsection
