@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="display-4 text-center">Write An Article ➕</h1>
    <form action="/posts" method="POST" class="mt-4">
      @csrf
      <div class="form-group">
        <label for="post-title" class="lead">Post Title</label>
        <input type="text" name="post-title" id="" class="form-control mt-2">
      </div>
      <div class="form-group">
        <label for="post-content" class="lead">Content</label>
        <textarea name="post-content" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="button start-reading-btn">Publish Article</button>
      </div>
    </form>
  </div>
@endsection 