@extends('layouts.dash')

@section('dash')
<h1 class="mt-4">Add menu item </h1>

<div class="col-lg-5">
    <form action="/admin/menu/store" method="POST">
        {{ csrf_field() }}
        <div class="mt-3 mb-3">
            <label for="form1" class="form-label">Menu Name</label>
            <input class="form-control" id= "form1" type="text" name="name" placeholder="Input item name">
          </div>
    
        <div class="mb-3">
          <label for="form2" class="form-label">Price</label>
          <input class="form-control" id="form2" type="number" name="price" placeholder="Input item price">
        </div>
    
        <div class="mb-3">
            <label for="form3" class="form-label">Category</label>
            <select class="form-select" id="form3">
                <option selected>Choose item category</option>
                <option value="1">Light bites</option>
                <option value="2">Appetizer</option>
                <option value="3">Main Course</option>
                <option value="4">Desserts</option>
                <option value="5">Drinks</option>
              </select>
        </div>
        
        <div class="mb-3">
            <label for="form4" class="form-label">Description</label>
            <textarea class="form-control" id="form4" rows="3" placeholder="Input item description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection