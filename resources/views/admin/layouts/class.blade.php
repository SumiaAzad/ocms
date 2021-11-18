@extends('admin.master')
@section('content')

<a  href="{{route('admin.class.add')}}"  class="btn btn-primary">Add Class</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Class</th>
      <th scope="col">Section</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Starting time</th>
      <th scope="col">Ending time</th>
      <th scope="col">Class Link</th>
    </tr>
  </thead>
  <tbody>
    @foreach($class as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->class}}</td>
      <td>{{$a->section}}</td>
      <td>{{$a->subject}}</td>
      <td>{{$a->date}}</td>
      <td>{{$a->start_time}}</td>
      <td>{{$a->end_time}}</td>
      <td>{{$a->link}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection