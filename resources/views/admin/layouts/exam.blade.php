@extends('admin.master')
@section('content')

<a href="{{route('admin.exam.add')}}" class="btn btn-primary">Add exam</a>
<table class="table table-dark table-hover">
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
      <th scope="col">Action</th>

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
      <td>
      <a class="btn btn-danger" href="{{route('admin.exam.delete',$a->id)}}">Delete</a>
        <a class="btn btn-success" href="{{route('admin.exam.edit',$a->id)}}">Edit</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection