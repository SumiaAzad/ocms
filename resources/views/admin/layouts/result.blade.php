@extends('admin.master')
@section('content')


@if(session()->has('msg'))
<p class="alert alert-success">
    {{session()->get('msg')}}
</p>
@endif
<a href="{{route('admin.result.add')}}" class="btn btn-primary">Add result</a>

<form action="{{route('admin.result')}}" >
<div class="input-group justify-content-end ">
  <div class="form-outline " >
    <input type="text" name="search" class="form-control " placeholder="enter search">
    
  </div>
  <button type="submit" class="btn btn-primary">
   submit
  </button>
  
</div>

</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Grade</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($data as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$a->name}}</td>
      <td>{{$a->user_id}}</td>
      <td>{{$a->class}}</td>
      <td>{{$a->subject}}</td>
      <td>{{$a->grade}}</td>
      <td>{{$a->status}}</td>
      <td>
      <a class="btn btn-danger" href="{{route('admin.result.delete',$a->id)}}">Delete</a>
        <a class="btn btn-success" href="{{route('admin.result.edit',$a->id)}}">Edit</a>
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>


@endsection