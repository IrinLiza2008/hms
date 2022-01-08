@extends('admin.master')

@section('content')
<form action="{{route('admin.allotlist.store')}}" method='POST'>
    @csrf
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID</label>
    <input name='sid' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input name='name' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Room</label>
    <input name='room' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input name='phone' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input name='address' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Parent phone</label>
    <input name='p_phone' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection