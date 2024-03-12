
@extends('layout.main')
@section('container')
@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="{{ BASEURL }}/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
        <h5>By:{{ $post->author }}</h5>
    <p>{{ $post->excerpt}}</p>
    
</article>
    
@endforeach
    
@endsection
