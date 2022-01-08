@extends('admin.master')
@section('content')
@if(session()->has('msg'))
<p class="alert alert-success">
    {{session()->get('msg')}}
</p>
@endif
<h1>User list</h1>

<form action="{{route('admin.user.list')}}">
<div class="input-group">
  <div class="form-outline">
    <input type="text" name="search" class="form-control" placeholder="enter search">
    
  </div>
  <button type="submit" class="btn btn-primary">
   submit
  </button>
</div>

</form>


    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $key=>$a)
         <tr>
        <th scope="row">{{$key+1}}</th>
        <td>
        <img src="{{url('/uploads/'.$a->image)}}" width="100px" alt="studentimage">
      </td>
        <td>{{$a->name}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->mobile}}</td>
        <td>
          @if($a->status == 'pending')
            <a class="btn btn-danger" href="{{route('admin.user.accept',$a->id)}}">Pending</a>
            @else
            <a class="btn btn-info" href="{{route('admin.user.accept',$a->id)}}">Accepted</a>
          @endif

</td>
<td>
@if($a->status == 'pending')
            <a class="btn btn-info" href="{{route('admin.user.accept',$a->id)}}">Accept</a>
           
          @endif

            <a class="btn btn-primary" href="{{route('admin.user.view',$a->id)}}">View</a>
            <a class="btn btn-danger" href="{{route('admin.user.delete',$a->id)}}">Delete</a>
            <a class="btn btn-success" href="{{route('admin.user.edit',$a->id)}}">Edit</a>

        </td>
    </tr>   
        @endforeach
    
    
    </tbody>
</table>

@endsection