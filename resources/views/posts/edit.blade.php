@extends('Layouts.app')

@section('content')
   <h1>Edit Post</h1>
   <form action="/posts/{{ $post->id }}" method="POST">
          {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <label for="title">Title</label>
        <input type="text" value="{{ $post->title }}" name="title" placeholder="Title" class="form-control">
        <label for="body">Body:</label>
        <textarea name="body" placeholder="Body" class="form-control" cols="30" rows="10">{{ $post->body }}</textarea><br>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    
@endsection