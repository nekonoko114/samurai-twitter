@extends('layouts.layouts')

@section('title','samurai_twitter')
<form method="POST"  action="/posts/{{ $post->id }}">
    {{ csrf_filed() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" value="{{ $post->title }}">
    <input type="text" name="content" value="{{ $post->content }}">
    <input type="submit">
</form>
@endsection
