
@extends('layout.main')


@section('container')
<h2>{{ $post["title"] }}</h2>

<a href="{{ BASEURL }}/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
<h3>{{ $post["author"] }}</h3>
<p>{!! $post->body !!}</p>
<a href="{{ BASEURL }}/blog">Back</a>
@endsection