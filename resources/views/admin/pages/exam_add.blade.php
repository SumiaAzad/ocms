@extends('admin.master')
@section('content')

@if(session()->has('msg'))
<p class="alert alert-success">
    {{session()->get('msg')}}
</p>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{route('admin.exam.store')}}" method='post'>
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Exam Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Exam Name</label>
<input required name='exam_name' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class</label>
<select required name='class' class="form-control">
<option>Select Class</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Subject</label>
<input required name='subject' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Start Time</label>
<input required name='start_time' type="time" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>End Time</label>
<input required name='end_time' type="time" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Event Date</label>
<input required name='date' type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Exam Link</label>
<input required name='link' type="text" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection