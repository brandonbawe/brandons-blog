@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="display-4 text-center">Edit This Article ✍🏾</h1>
    <form action="/posts/{{ $post->id }}" method="POST" class="mt-4">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="post-title" class="lead">Post Title</label>
        <input type="text" name="post-title" id="" class="form-control mt-2" value="{{ $post->post_title }}">
      </div>
      <div class="form-group">
        <label for="post-content" class="lead">Content</label>
        <textarea name="post-content" id="" cols="30" rows="10" class="form-control">
            {{ $post->content }}
        </textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="button start-reading-btn">Update Article</button>
      </div>
    </form>
  </div>
@endsection 