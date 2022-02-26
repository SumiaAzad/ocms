@extends('admin.master')
@section('content')

       @if(session()->has('msg'))
                <p class="alert alert-success">
                {{session()->get('msg')}}
                </p>
           @endif

<h1>Welcome Admin</h1>


<div class="d-flex justify-content-center">
     <div class="card text-white bg-dark" style="width: 18rem;">
          <img src="{{url('/img/user.jpg')}}" class="card-img-top" alt="...">
     <div class="card-body">
          <h3 class="text-center">Number of Users</h3>
          <span class="d-flex justify-content-center h2">{{$user}}</span>
     </div>
     </div>
     <div class="card text-white bg-dark" style="width: 18rem;">
          <img src="{{url('/img/teacher.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
          <h3 class="text-center">Number of Teachers</h3>
               <span class="d-flex justify-content-center h2">{{$teacher}}</span>
     </div>
     </div>
     <div class="card text-white bg-dark" style="width: 18rem;">
     <img src="{{url('/img/student.jpg')}}" class="card-img-top" alt="...">
     <div class="card-body">
     <h3 class="text-center">Number of Students</h3>
          <span class="d-flex justify-content-center h2">{{$student}}</span>
     </div>
     </div>

</div>



@endsection