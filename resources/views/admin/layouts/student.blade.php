@extends('admin.master')
@section('content')

<a href="{{route('admin.student.add')}}" class="btn btn-primary">Add Student</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email ID</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        <img src="{{url('/uploads/'.$a->image)}}" width="100px" alt="studentimage">
      </td>
      <td>{{$a->name}}</td>
      <td>{{$a->class}}</td>
      <td>{{$a->mobile}}</td>
      <td>{{$a->email}}</td>
      <td>{{$a->password}}</td>
      <td>{{$a->address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection