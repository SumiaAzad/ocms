@extends('admin.master')
@section('content')

<h4>Exam update</h1>
 
<form action="{{route('admin.exam.update',$exam->id)}}" method="post">
  @method('put')
  @csrf
  <div class="mb-3">
  <label>Exam name</label>
    <input type="text" name="exam_name" value="{{$exam->exam_name}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Class</label>
    <input type="text" name="class" value="{{$exam->class}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Subject</label>
    <input type="text" name="subject" value="{{$exam->subject}}" class="form-control"  >
</div>

<div class="mb-3">
<label>Start Time</label>
    <input type="time" name="start_time" value="{{$exam->start_time}}" class="form-control"  >
</div>
<div class="mb-3">
<label>End Time</label>
    <input type="time" name="end_time" value="{{$exam->end_time}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Date</label>
    <input type="date" name="date" value="{{$exam->date}}" class="form-control"  >
</div>
<div class="mb-3">
<label>Link</label>
    <input type="text" name="link" value="{{$exam->link}}" class="form-control"  >
</div>


  
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection