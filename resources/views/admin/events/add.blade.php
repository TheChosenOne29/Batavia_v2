@extends('layouts.dash')

@section('dash')
<h1 class="mt-4">Add item</h1>

<div class="col-lg-5">
    <form action="/admin/events/store" method="POST">
        {{ csrf_field() }}
        <div class="mt-3 mb-3">
            <label for="form1" class="form-label">Date</label>
            <input class="form-control" id= "form1" type="date" name="date">
          </div>
    
        <div class="mb-3">
          <label for="form2" class="form-label">Title</label>
          <input class="form-control" id="form2" type="number" name="number">
        </div>
    
        <div class="mb-3">
            <label for="form3" class="form-label">Description</label>
            <textarea class="form-control" id="form3" rows="6" placeholder="Input event description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection