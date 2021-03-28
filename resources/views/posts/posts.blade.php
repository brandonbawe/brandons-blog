@extends('layouts.app');

@section('content')
   <div class="container">
       @foreach($posts as $post)
      <div class="mb-5 border-bottom">
          
        <div class=" pb-4">
          <h1 class="text-primary">{{ $post->post_title }}</h1>

          <div class="d-flex">
                <a href="posts/{{ $post->id }}/edit" class="text-white btn btn-dark">Edit Post</a>
                <form action="posts/{{ $post->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger ml-3">Delete</button>
                </form>
          </div>
          
        </div>
        <div>
         <p class="lead">{{ $post->content}}</p>
        </div>
        
      </div>
      @endforeach

  <div>
@endsection