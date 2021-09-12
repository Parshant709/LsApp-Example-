@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif
                    
                        <a href="/posts/create" class="btn btn-primary">Create Post</a><br><br>
                        <h3>Your Blog Post</h3> <br>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <form action="/posts/{{ $post->id }}" method="POST">
                                            {{ @csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger ">Delete</button>
                                          </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    @else
                    <p>You have a No Posts </p>
                    @endif
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
