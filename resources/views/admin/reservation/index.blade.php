@extends('layouts.dash')

@section('dash')
<h1 class="mt-4">All item</h1>

<div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
        <tr>Í
          <th scope="col">Name</th>
          <th scope="col">E-mail</th>
          <th scope="col">Phone</th>
          <th scope="col">Number of Guest</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($dataReservation as $item)
      <tr>
          <td>{{$item -> name}} </td>
          <td>{{$item -> email}} </td>
          <td>{{$item -> phone}} </td>
          <td>{{$item -> guest}} </td>
          <td>{{$item -> date}} </td>
          <td>{{$item -> time}} </td>
          <td>
            <a href="/admin/reservation/erase/{{$item -> id}}">Delete</a>
            <a href="/admin/reservation/edit/{{$item -> id}}">Update</a>
          </td>
      </tr>
      @endforeach
      </tbody>
    </table>
</div>
@endsection