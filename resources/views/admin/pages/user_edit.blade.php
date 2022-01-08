@extends('admin.master')
@section('content')

<h4>User update</h1>
 
<form action="{{route('admin.user.update',$users->id)}}" method="post">
  @method('put')
  @csrf
  <div class="mb-3">
    <input type="text" name="name" value="{{$users->name}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="gender" value="{{$users->gender}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="birth" value="{{$users->birth}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="class" value="{{$users->class}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="join" value="{{$users->join}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="mobile" value="{{$users->mobile}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="email" value="{{$users->email}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="password" value="{{$users->password}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="father_name" value="{{$users->father_name}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="father_mobile" value="{{$users->father_mobile}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="mother_name" value="{{$users->mother_name}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="mother_mobile" value="{{$users->mother_mobile}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="address" value="{{$users->address}}" class="form-control"  >
</div>
<div class="mb-3">
    <input type="text" name="image" value="{{$users->image}}" class="form-control"  >
</div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection