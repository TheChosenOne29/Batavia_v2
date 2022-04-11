@extends('layouts.dash')

@section('dash')
<h1 class="mt-4">All item</h1>

<div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Category</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($dataMenu as $item)
      <tr>
          <td>{{$item -> name}} </td>
          <td>{{$item -> price}} </td>
          <td>{{$item -> category}} </td>
          <td>{{$item -> desc}} </td>
          <td>
            <a href="/admin/menu/erase/{{$item -> id}}">Delete</a>
            <a href="/admin/menu/edit/{{$item -> id}}">Update</a>
          </td>
      </tr>
      @endforeach
      </tbody>
    </table>
</div>
@endsection