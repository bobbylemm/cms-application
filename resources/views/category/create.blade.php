@extends('layouts.app')

@section('content')
    <div class="card card-default">
      <div class="card-header">
        {{ isset($category) ? 'Edit Category' : 'Create Category' }}
      </div>

        <div class="card-body">

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="list-group ">
                @foreach ($errors->all() as $error)
                  <li class="list-group-item text-danger">{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store')}}">
            @csrf
            
            @if (isset($category))
              @method('PUT')
            @endif

            <div class="form-group">
              <input class="form-control" placeholder="create new category" name="name" value="{{isset($category) ? $category->name : ''}}"/>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-outline-success btn-lg btn-block">
                {{isset($category) ? 'update' : 'create'}}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection