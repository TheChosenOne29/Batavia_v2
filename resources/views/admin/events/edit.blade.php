@extends('layouts.dash')

@section('dash')
<h1 class="mt-4">Update item</h1>

<div class="col-lg-5">
    <form action="/admin/events/update" method="POST">
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
            <label for="form3" class="form-label">Body</label>
            <input class="form-control" id= "form3" type="textarea" name="body">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection