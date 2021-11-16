@extends('admin.master')
@section('content')

<form action="{{route('admin.teacher.store')}}" method='POST'>
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Basic Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Teacher ID</label>
<input name='tid' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Name</label>
<input name='name' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Gender</label>
<select name='gender' class="form-control">
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date of Birth</label>
<input name='birth' type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile</label>
<input name='mobile' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Joining Date</label>
<input name='join_date' type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Qualification</label>
<input name='qualification' class="form-control" type="text">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Experience</label>
<input name='experience' class="form-control" type="text">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Email ID</label>
<input name='email' type="email" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Password</label>
<input name='pass' type="text" class="form-control">
</div>
</div>



<div class="col-12">
<div class="form-group">
<label>Address</label>
<input name='address' type="text" class="form-control">
</div>
</div>




<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection