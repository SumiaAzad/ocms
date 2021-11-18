@extends('admin.master')
@section('content')

<form action="{{route('admin.exam.store')}}" method='post'>
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Exam Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Exam Name</label>
<input name='exam_name' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class</label>
<select name='class' class="form-control">
<option>Select Class</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
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
<label>Event Date</label>
<input name='date' type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Exam Link</label>
<input name='link' type="text" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection