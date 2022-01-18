@extends('admin.master')
@section('content')
<h1>Student Infromation</h1>

<form action="{{route('admin.student')}}" >
<div class="input-group justify-content-end ">
  <div class="form-outline">
    <input type="text" name="search" class="form-control" placeholder="enter search">
    
  </div>
  <button type="submit" class="btn btn-primary">
   submit
  </button>
</div>

</form>
<table class="table table-dark table-hover">
  <thead>
    <tr>

      <th scope="col">Student Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Email ID</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $a)
  @if($a->role == 'user')
  <tr>
        <th scope="row">{{$a->user_id}}</th>
  <td>
        <img src="{{url('/uploads/'.$a->image)}}" width="100px" alt="studentimage">
      </td>
        <td>{{$a->name}}</td>
        <td>{{$a->class}}</td>
        <td>{{$a->email}}</td>
        <td>
@if($a->status == 'pending')
            <a class="btn btn-info" href="{{route('admin.student.accept',$a->id)}}">Accept</a>
           
          @endif

            <a class="btn btn-primary" href="{{route('admin.student.view',$a->id)}}">View</a>
            <a class="btn btn-danger" href="{{route('admin.student.delete',$a->id)}}">Delete</a>
            <a class="btn btn-success" href="{{route('admin.student.edit',$a->id)}}">Edit</a>

        </td>
        </tr>
        @endif
        @endforeach
  </tbody>
</table>

@endsection