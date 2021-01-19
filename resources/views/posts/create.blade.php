@extends('layouts.leyouts')

@section('title','samurai_twitter')

@section('content')

<h1>New Post</h1>
@if ($error->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($error->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/posts" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
            <textarea class="form-control" name="content">{{old('content' )}}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>

    <a href="/posts">Back</a>
@endsection
