@extends('layouts.dash')

@section('dash')
<h1>Semua Data</h1>
<table class="table">
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
          <a href="/admin/menu/erase/{{$item -> id}}">Hapus</a>
          <a href="/admin/menu/edit/{{$item -> id}}">Ubah</a>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection