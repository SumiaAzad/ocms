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


<form action="{{route('admin.routine.store')}}" method='post'>
  @csrf
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
    <select required name='subject' type="text" class="form-control" id="exampleInputPassword1">
    <option>Select One</option>
<option>Bangla</option>
<option>English</option>
<option>Math</option>
<option>Science</option>
<option>Social Science</option>
<option>Relegion</option>
<option>Ict</option>

</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date</label>
    <input required name='date' type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Time</label>
    <input required name='time' type="time" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Link</label>
    <input required name='link' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection