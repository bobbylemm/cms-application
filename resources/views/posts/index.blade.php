@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-end mb-3">
    <a href="{{ route('posts.create')}}" class="btn btn-secondary">create a new post</a>
  </div>

  <div class="card card-default">
    <div class="card-header">Posts</div>
    
    <div class="card-body font-weight-bolder">
      @if ($posts->count() > 0)
          <table class="table">
        <thead>
          <th>Image</th>
          <th>Posts</th>
          <th></th>
          <th></th>
        </thead>
        <tbody>
          @foreach ($posts as $post)
              <tr>
                <td>
                <img src="{{ asset($post->image) }}" width="100px" height="50px" />
                </td>
                <td>
                  {{$post->title}}
                </td>
                <td>
                  @if (! $post->trashed())
                      <a href="" class="btn btn-success btn-sm">Edit</a>
                  @endif
                </td>
                <td>
                  <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">
                      {{$post->trashed() ? 'Delete permanently': 'Trash Post'}}
                    </button>
                  </form>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
      @else
        <h2>So, There are no posts at the moment</h2>
      @endif
    </div>
  </div>

@endsection