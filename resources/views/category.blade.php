
@extends('layout.main')
@section('container')
@foreach ($posts as $post)
<article class="mb-5">
    <h1>Post Category : {{ $category }}</h1>
    
    <h2>
        <a href="{{ BASEURL }}/categories/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
        <h5>By:{{ $post->excerpt }}</h5></h5>
</article>
    
@endforeach
<h1>{{ $pesan }}</h1>
    
@endsection
