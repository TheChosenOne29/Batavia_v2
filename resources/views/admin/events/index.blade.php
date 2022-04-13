@extends('layouts.dash')

@section('dash')
<h1 class="mt-4">All item</h1>

<div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Title</th>
          <th scope="col">Body</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($dataEvents as $item)
      <tr>
          <td>{{$item -> date}} </td>
          <td>{{$item -> title}} </td>
          <td>{{$item -> body}} </td>
          <td>
            <a href="/admin/events/erase/{{$item -> id}}">Delete</a>
            <a href="/admin/events/edit/{{$item -> id}}">Update</a>
          </td>
      </tr>
      @endforeach
      </tbody>
    </table>
</div>
@endsection