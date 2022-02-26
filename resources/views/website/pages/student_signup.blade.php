@extends('website.master')
@section('content')



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container my-5 ">
<form action="{{route('user.signup.store')}}" method='POST' enctype="multipart/form-data">
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Student Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input required name='name' type="text" class="form-control" id="exampleInputPassword1">
  </div>
</div>

<div class="col-12 col-sm-6">
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Student ID</label>
<input required name='user_id' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Gender</label>
<select required name='gender' class="form-control">
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
<input required name='birth' type="date" class="form-control">
</div>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class</label>
<select required name='class' type="text" class="form-control">
<option>Select one</option>
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
<label>Joining Date</label>
<div>
<input required name='join' type="date" class="form-control">
</div>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile Number</label>
<input required name='mobile' type="text" class="form-control">
</div>
</div>


<div class="col-12 col-sm-6">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input required name='email' type="email" class="form-control" id="exampleInputPassword1">
  </div>
</div>

<div class="col-12 col-sm-6">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required name='password' type="password" class="form-control" id="exampleInputPassword1">
  </div>
</div>
<div class="col-12">
<h5 class="form-title"><span>Parent Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Father's Name</label>
<input required name='father_name' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Father's Mobile</label>
<input required name='father_mobile' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mother's Name</label>
<input required name='mother_name' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mother's Mobile</label>
<input required name='mother_mobile' type="text" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Address</label>
<textarea required name='address' class="form-control"></textarea>
</div>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Picture</label>
  <input name='image' class="form-control" type="file" id="formFile">
</div>
<div >
          <input hidden value="student" name="role" type="text" class="form-control" >
        </div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>

@endsection