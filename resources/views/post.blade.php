
@extends('layout.main')


@section('container')
    <h2>{{ $post["title"] }}</h2>
    <h3>{{ $post["author"] }}</h3>
    <p>{{ $post["body"] }}</p>
    <a href="{{ BASEURL }}/blog">Back</a>
@endsection