@extends('website.master')
@section('content')


<div class="container">

<a href="{{route('website.teacher.result.add')}}" class="btn btn-primary">Add result</a>
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
      <a class="btn btn-danger" href="{{route('website.teacher.result.delete',$a->id)}}">Delete</a>
        <a class="btn btn-success" href="{{route('website.teacher.result.edit',$a->id)}}">Edit</a>
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>
</div>

@endsection