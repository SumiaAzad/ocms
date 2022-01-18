@extends('admin.master')
@section('content')

<form class="print_order">
    <input class="btn btn-primary" type="button" onclick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">

<h2>Student Details</h2>
 
<p>        
  <img src="{{url('/uploads/'.$users->image)}}" width="200px" alt="studentimage">
</p>
<p style="font-size: 20px">Student id:{{$users->user_id}}</p>
<p style="font-size: 20px">Student name:{{$users->name}}</p>
<p style="font-size: 20px">Student address:{{$users->address}}</p>
<p style="font-size: 20px">Student mobile:{{$users->mobile}}</p>
<p style="font-size: 20px">Student gender:{{$users->gender}}</p>
<p style="font-size: 20px">Student birth:{{$users->birth}}</p>
<p style="font-size: 20px">Student class:{{$users->class}}</p>
<p style="font-size: 20px">Student email:{{$users->email}}</p>
<p style="font-size: 20px">Student join date:{{$users->join}}</p>
<p style="font-size: 20px">Student father name:{{$users->father_name}}</p>
<p style="font-size: 20px">Student father mobile:{{$users->father_mobile}}</p>
<p style="font-size: 20px">Student mother name:{{$users->mother_name}}</p>
<p style="font-size: 20px">Student mother mobile:{{$users->mother_mobile}}</p>


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