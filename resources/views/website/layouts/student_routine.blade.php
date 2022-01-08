@extends('website.master')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$a->class}}</td>
      <td>{{$a->subject}}</td>
      <td>{{$a->date}}</td>
      <td>{{$a->time}}</td>
      <td>{{$a->link}}</td>

    </tr>
    @endforeach
  </tbody>
</table>

@endsection