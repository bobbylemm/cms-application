@extends('layouts.app')

@section('content')
  <div class="card card-default">
    <div class="card-header">
      Create Posts
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="text" class="form-control" name="title" id="title" />
        </div>
        <div class="form-group">
          <label for="description">Post Description</label>
          <textarea name="description" id="description" cols="2" rows="2" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="content">Post Content</label>
          <textarea name="content" id="content" cols="6" rows="6" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="publishedAt">Published At</label>
          <input type="text" class="form-control" name="publishedAt" id="publishedAt" />
        </div>
        <div class="form-group">
          <label for="image">Published At</label>
          <input type="file" class="form-control" name="image" id="image" />
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">
            create post
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection