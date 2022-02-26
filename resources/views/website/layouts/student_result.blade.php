@extends('website.master')
@section('content')

<div class="container my-5">


<form class="print_order">
    <input class="btn btn-primary" type="button" onclick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">


<table class="table table-light table-hover">
  <thead>
  <tr>
  <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Grade</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @php
      $total_grade = 0;
      @endphp
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
        @php
        $total_grade = ($a->grade + $total_grade);
        @endphp
      </td>
      <!-- <td>{{$total_grade}}</td> -->
     <td>{{$a->status}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
<table>
  <th>Final result</th>
  <tbody>
    <tr>
      @php
      $final=$total_grade/($key+1);
      @endphp
      <td>
        <!-- {{$final}} -->
         @if($final <= '100' && $final >= '90')<a href="">A</a>
        @elseif($final <= '89' && $final >= '80')<a href="">B</a>
        @elseif($final <= '79' && $final >= '70')<a href="">C</a>
        @elseif($final<= '69' && $final >= '60')<a href="">D</a>
        @else($final <= '59' && $final >= '00')<a href="">F</a>
        
        @endif
      </td>
    </tr>
  </tbody>
</table>
</div>
@endsection


<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://localhost/ltms-app/public/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>