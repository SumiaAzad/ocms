@extends('admin.master')
@section('content')

<a href="{{route('admin.student.add')}}" class="btn btn-primary">Add Student</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student ID</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Section</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email ID</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->sid}}</td>
      <td>{{$a->name}}</td>
      <td>{{$a->class}}</td>
      <td>{{$a->section}}</td>
      <td>{{$a->mobile}}</td>
      <td>{{$a->email}}</td>
      <td>{{$a->address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection