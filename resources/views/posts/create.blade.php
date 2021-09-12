@extends('Layouts.app')

@section('content')
   <h1>Create Post</h1>
   <form action="/posts" method="POST">
           {{ csrf_field() }}
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Title" class="form-control">
        <label for="body">Body:</label>
        <textarea name="body" placeholder="Body" class="form-control" cols="30" rows="10"></textarea><br>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    
@endsection