@extends('website.master')
@section('content')


<div class="container my-5">

<form action="{{route('website.teacher.result.store')}}" method='post'>
  @csrf
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input required name='name' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Student ID</label>
    <input required name='user_id' type="text" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Class</label>
    <select required name='class' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <option>Select one</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Subject</label>
    <input required name='subject' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Marks</label>
    <input required name='grade' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <select required name='status' type="text" class="form-control" id="exampleInputPassword1">
    <option>Select one</option>
<option>Excellent</option>
<option>Very good</option>
<option>Good</option>
<option>Poor</option>
</select>
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection