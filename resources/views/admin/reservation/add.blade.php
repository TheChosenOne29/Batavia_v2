@extends('layouts.dash')

@section('dash')
<h1 class="mt-4">Add reservation item</h1>

<div class="col-lg-5">
    <form action="/admin/reservation/store" method="POST">
        {{ csrf_field() }}
        <div class="mt-3 mb-3">
            <label for="form1" class="form-label">Name</label>
            <input class="form-control" id= "form1" type="text" name="name">
          </div>
    
        <div class="mb-3">
          <label for="form2" class="form-label">E-mail</label>
          <input class="form-control" id="form2" type="email" name="email">
        </div>
    
        <div class="mb-3">
            <label for="form3" class="form-label">Phone</label>
            <input class="form-control" id= "form3" type="number" name="phone">
        </div>
        
        <div class="mb-3">
            <label for="form4" class="form-label">Number of Guest</label>
            <input class="form-control" id= "form4" type="number" name="guest">
        </div>

        <div class="mb-3">
            <label for="form5" class="form-label">Date</label>
            <input class="form-control" id= "form5" type="date" name="date">
        </div>

        <div class="mb-3">
            <label for="form6" class="form-label">Time</label>
            <input class="form-control" id= "form6" type="time" name="time">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection