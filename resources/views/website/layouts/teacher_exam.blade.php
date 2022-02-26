@extends('website.master')
@section('content')


<div class="container my-5">

<table class="table table-light table-hover">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Exam Name</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Starting time</th>
      <th scope="col">Ending time</th>
      <th scope="col">Date</th>
      <th scope="col">Exam Link</th>

    </tr>
  </thead>
  <tbody>
  @foreach($exam as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$a->exam_name}}</td>
      <td>{{$a->class}}</td>
      <td>{{$a->subject}}</td>
      <td>{{$a->date}}</td>
      <td>{{$a->start_time}}</td>
      <td>{{$a->end_time}}</td>
      <td>{{$a->link}}</td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

@endsection