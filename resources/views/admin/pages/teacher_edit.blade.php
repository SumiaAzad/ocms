@extends('admin.master')
@section('content')

<h4>Teacher update</h1>
 
<form action="{{route('admin.teacher.update',$users->id)}}" method="post">
  @method('put')
  @csrf
  <div class="mb-3">
  <label>Teacher Name</label>
    <input type="text" name="name" value="{{$users->name}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Gender</label>
    <input type="text" name="gender" value="{{$users->gender}}" class="form-control"  >
</div>

<div class="mb-3">
<label>Mobile</label>
    <input type="text" name="mobile" value="{{$users->mobile}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Email</label>
    <input type="text" name="email" value="{{$users->email}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Password</label>
    <input type="text" name="password" value="{{$users->password}}" class="form-control"  >
</div>

<div class="mb-3">
<label>Address</label>
    <input type="text" name="address" value="{{$users->address}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Image</label>
    <input type="text" name="image" value="{{$users->image}}" class="form-control"  >
</div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection