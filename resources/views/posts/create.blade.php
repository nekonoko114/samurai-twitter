@extends('layouts.leyouts')

@section('title','samurai_twitter')

@section('content')

<form action="/posts" method="POST">
    {{ csrf_field() }}
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit">
</form>
@endsection
