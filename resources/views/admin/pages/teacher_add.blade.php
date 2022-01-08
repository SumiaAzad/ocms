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

<form action="{{route('admin.teacher.store')}}" method='POST' enctype="multipart/form-data" >
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Basic Details</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Teacher ID</label>
<input required name='tid' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Name</label>
<input required name='name' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Gender</label>
<select required name='gender' class="form-control">
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date of Birth</label>
<input required name='birth' type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Mobile</label>
<input required name='mobile' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Joining Date</label>
<input required name='join_date' type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Qualification</label>
<input required name='qualification' class="form-control" type="text">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Experience</label>
<input required name='experience' class="form-control" type="text">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Email ID</label>
<input required name='email' type="email" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Password</label>
<input required name='pass' type="text" class="form-control">
</div>
</div>



<div class="col-12">
<div class="form-group">
<label>Address</label>
<input required name='address' type="text" class="form-control">
</div>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Picture</label>
  <input name='image' class="form-control" type="file" id="formFile">
</div>



<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection