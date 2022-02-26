@extends('website.master')
@section('content')


<div class="container my-5">

<a href="{{route('website.teacher.result.add')}}" class="btn btn-primary">Add result</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Grade</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    
  @foreach($data as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$a->name}}</td>
      <td>{{$a->user_id}}</td>
      <td>{{$a->class}}</td>
      <td>{{$a->subject}}</td>
      <td>
      @if($a->grade <= '100' && $a->grade >= '90')<a href="">A</a>
        @elseif($a->grade <= '89' && $a->grade >='80')<a href="">B</a>
        @elseif($a->grade <= '79' && $a->grade >= '70')<a href="">C</a>
        @elseif($a->grade <= '69' && $a->grade >= '60')<a href="">D</a>
        @else($a->grade <= '59' && $a->grade >= '00')<a href="">F</a>
        
        @endif
      </td>
      <td>{{$a->status}}
     
      </td>
      <td>
      <a class="btn btn-danger" href="{{route('website.teacher.result.delete',$a->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>
</div>

@endsection