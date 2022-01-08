@extends('admin.master')
@section('content')

<a href="{{route('admin.teacher.add')}}" class="btn btn-primary">Add Teacher</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Teacher ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email ID</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($teacher as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        <img src="{{url('/uploads/'.$a->image)}}" width="100px" alt="studentimage">
      </td>
      <td>{{$a->tid}}</td>
      <td>{{$a->name}}</td>
      <td>{{$a->gender}}</td>
      <td>{{$a->mobile}}</td>
      <td>{{$a->email}}</td>
      <td>{{$a->address}}</td>

      
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection