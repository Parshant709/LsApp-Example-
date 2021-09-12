@extends('Layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-success">go back</a>
    <h1>{{ $post->title }}</h1>
    <div>
      {{ $post->body }}
    </div>
    <hr>
    <small>written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <hr>
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
        <form action="/posts/{{ $post->id }}" method="POST">
          {{ @csrf_field() }}
          <input type="hidden" name="_method" value="DELETE"><br>
          <button type="submit" class="btn btn-danger ">Delete</button>
        </form>
      @endif
    @endif
 
@endsection
