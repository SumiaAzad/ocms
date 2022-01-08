@extends('admin.master')
@section('content')

<a  href="{{route('admin.subject.add')}}"  class="btn btn-primary">Add Subject</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Teacher</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Class</th>
    </tr>
  </thead>
  <tbody>
    @foreach($subject as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$a->class->teacher}}</td>
      <td>{{$a->class->subject}}</td>
      <td>{{$a->class->class}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection