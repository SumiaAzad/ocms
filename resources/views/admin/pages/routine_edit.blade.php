@extends('admin.master')
@section('content')

<h4>Routine update</h1>
 
<form action="{{route('admin.routine.update',$routine->id)}}" method="post">
  @method('put')
  @csrf
  <div class="mb-3">
  <label>Class</label>
    <input type="text" name="name" value="{{$routine->class}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Subject</label>
    <input type="text" name="subject" value="{{$routine->subject}}" class="form-control"  >
</div>

<div class="mb-3">
<label>Date</label>
    <input type="date" name="date" value="{{$routine->date}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Time</label>
    <input type="time" name="time" value="{{$routine->time}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Link</label>
    <input type="text" name="link" value="{{$routine->link}}" class="form-control"  >
</div>


  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection