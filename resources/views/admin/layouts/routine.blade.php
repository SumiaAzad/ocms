@extends('admin.master')
@section('content')



<a href="{{route('admin.routine.add')}}" class="btn btn-primary">Add routine</a>


<form action="{{route('admin.routine')}}" >
<div class="input-group justify-content-end ">
  <div class="form-outline">
    <input type="text" name="search" class="form-control" placeholder="enter search">
    
  </div>
  <button type="submit" class="btn btn-primary">
   submit
  </button>
</div>

</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Link</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($data as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$a->class}}</td>
      <td>{{$a->subject}}</td>
      <td>{{$a->date}}</td>
      <td>{{$a->time}}</td>
      <td>{{$a->link}}</td>
      <td>
      <a class="btn btn-danger" href="{{route('admin.routine.delete',$a->id)}}">Delete</a>
        <a class="btn btn-success" href="{{route('admin.routine.edit',$a->id)}}">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection