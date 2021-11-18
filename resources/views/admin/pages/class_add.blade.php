@extends('admin.master')
@section('content')

<form action="{{route('admin.class.store')}}" method='post'>
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Class Information</span></h5>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class</label>
<input name='class' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Section</label>
<input name='section' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Subject</label>
<input name='subject' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date</label>
<input name='date' type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Start Time</label>
<input name='start_time' type="time" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>End Time</label>
<input name='end_time' type="time" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class Link</label>
<input name='link' type="text" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection