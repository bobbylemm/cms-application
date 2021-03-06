@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-3">
      <a href="{{ route('categories.create')}}" class="btn btn-secondary">create category</a>
    </div>

    <div class="card card-default">
      <div class="card-header font-weight-bolder">CATEGORIES</div>

      <div class="card-body">
        <table class="table">
          <thead>
            <th>Category Name</th>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr class="d-flex">
                <td>
                  {{$category->name}}
                </td>
                <td class="ml-auto">
                  <a href="{{route('categories.edit', $category->id)}}" class="btn btn-outline-info">edit</a>
                </td>
                <td>
                  <button class="btn btn-outline-danger">delete</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
@endsection