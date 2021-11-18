@extends('admin.master')
@section('content')

<a  href="{{route('admin.subject.add')}}"  class="btn btn-primary">Add Subject</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject ID</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Class</th>
    </tr>
  </thead>
  <tbody>
    @foreach($subject as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->sub_id}}</td>
      <td>{{$a->sub_name}}</td>
      <td>{{$a->class}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection