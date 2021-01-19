@extends('layouts.layouts')

@section('title','samurai_twitter')

@section('copntent')

<h1>Editing< Post/h1>

<form method="POST"  action="/posts/{{ $post->id }}">
    {{ csrf_filed() }}
    <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <textarea class="form-control" name="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/post/{{ $post->id }}">Show</a>
<a href="/posts">Back</a>

@endsection
