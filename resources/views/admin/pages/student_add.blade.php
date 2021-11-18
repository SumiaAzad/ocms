@extends('admin.master')
@section('content')


<form action="{{route('admin.student.store')}}" method='POST'>
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Student Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input name='name' type="text" class="form-control" id="exampleInputPassword1">
  </div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Student Id</label>
<input name='sid' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Gender</label>
<select name='gender' class="form-control">
<option>Select Gender</option>
<option>Female</option>
<option>Male</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date of Birth</label>
<div>
<input name='birth' type="date" class="form-control">
</div>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class</label>
<input name='class' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Joining Date</label>
<div>
<input name='join' type="date" class="form-control">
</div>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile Number</label>
<input name='mobile' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Admission Number</label>
<input name='admission_number' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Section</label>
<input name='section' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input name='email' type="email" class="form-control" id="exampleInputPassword1">
  </div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Parent Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Father's Name</label>
<input name='father_name' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Father's Mobile</label>
<input name='father_mobile' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mother's Name</label>
<input name='mother_name' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mother's Mobile</label>
<input name='mother_mobile' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Address</label>
<textarea name='address' class="form-control"></textarea>
</div>
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection