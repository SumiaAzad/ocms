@extends('admin.master')
@section('content')


<a href="{{route('admin.payment.add')}}" class="btn btn-primary">Add Payment</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Payment ID</th>
      <th scope="col">Payment Name</th>
      <th scope="col">Class</th>
      <th scope="col">Amount</th>
      <th scope="col">Starting date</th>
      <th scope="col">Ending date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($payment as $key=>$a)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$a->pay_id}}</td>
      <td>{{$a->pay_type}}</td>
      <td>{{$a->class}}</td>
      <td>{{$a->amount}}</td>
      <td>{{$a->start_date}}</td>
      <td>{{$a->end_date}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection