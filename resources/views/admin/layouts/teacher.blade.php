@extends('admin.master')
@section('content')

<a href="{{route('admin.teacher.add')}}" class="btn btn-primary">Add Teacher</a>

<form action="{{route('admin.teacher')}}" >
<div class="input-group justify-content-end ">
  <div class="form-outline " >
    <input type="text" name="search" class="form-control " placeholder="enter search">
    
  </div>
  <button type="submit" class="btn btn-primary">
   submit
  </button>
  
</div>

</form>


<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Teacher Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $a)
  @if($a->role == 'teacher')
  <tr>
  
        <th scope="row">{{$a->user_id}}</th>
  <td>
        <img src="{{url('/uploads/'.$a->image)}}" width="100px" alt="studentimage">
      </td>
        <td>{{$a->name}}</td>
        <td>{{$a->email}}</td>
        <td>
@if($a->status == 'pending')
            <a class="btn btn-info" href="{{route('admin.teacher.accept',$a->id)}}">Accept</a>
           
          @endif

            <a class="btn btn-primary" href="{{route('admin.teacher.view',$a->id)}}">View</a>
            <a class="btn btn-danger" href="{{route('admin.teacher.delete',$a->id)}}">Delete</a>
            <a class="btn btn-success" href="{{route('admin.teacher.edit',$a->id)}}">Edit</a>

        </td>
        </tr>
        @endif
        @endforeach
  </tbody>
</table>

@endsection