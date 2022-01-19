@extends('admin.master')
@section('content')

<h4>Result update</h1>
 
<form action="{{route('admin.result.update',$result->id)}}" method="post">
  @method('put')
  @csrf
  <div class="mb-3">
<label>Name</label>
    <input type="text" name="name" value="{{$result->name}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Student ID</label>
    <input type="text" name="user_id" value="{{$result->user_id}}" class="form-control"  >
</div>

  <div class="mb-3">
  <label>Class</label>
    <input type="text" name="class" value="{{$result->class}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Subject</label>
    <input type="text" name="subject" value="{{$result->subject}}" class="form-control"  >
</div>

<div class="mb-3">
<label>Grade</label>
    <input type="grade" name="grade" value="{{$result->grade}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Status</label>
    <input type="text" name="status" value="{{$result->status}}" class="form-control"  >
</div>


  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection