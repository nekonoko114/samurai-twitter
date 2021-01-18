@extends('layouts.layouts')

@section('title','samurai_twitter')

@section('contens')                                                            )

@if (session('message'))
    {{session('message') }}
@endif

{{ $post->title }}
{{ $post->content }}

<a href="/post/{{ $post->id }}/edit">Edit</a>
@endsection
