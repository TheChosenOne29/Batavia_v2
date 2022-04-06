@extends('layouts.dash')

@section('dash')

<h1>Tambah Data</h1>

<div class="col-lg-5">
    <form action="/admin/menu/store" method="POST">
        {{ csrf_field() }}
        <div class="mt-3 mb-3">
            <label for="form1" class="form-label">Menu Name</label>
            <input class="form-control" id= "form1" type="text" name="name">
          </div>
    
        <div class="mb-3">
          <label for="form2" class="form-label">Price</label>
          <input class="form-control" id="form2" type="number" name="price">
        </div>
    
        <div class="mb-3">
            <label for="form3" class="form-label">Category</label>
            <input class="form-control" id= "form3" type="text" name="category">
        </div>
        
        <div class="mb-3">
            <label for="form4" class="form-label">Description</label>
            <input class="form-control" id= "form4" type="text" name="desc">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection