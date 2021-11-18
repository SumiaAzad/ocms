@extends('admin.master')
@section('content')

<a href="{{route('admin.exam.add')}}" class="btn btn-primary">Add exam</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
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
  @foreach($exam as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
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


@endsection