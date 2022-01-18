@extends('admin.master')
@section('content')

<form class="print_order">
    <input class="btn btn-primary" type="button" onclick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">

<h2>Teacher Details</h2>
 
<p>        
  <img src="{{url('/uploads/'.$users->image)}}" width="200px" alt="studentimage">
</p>
<p style="font-size: 20px">Teacher id:{{$users->user_id}}</p>
<p style="font-size: 20px">Teacher name:{{$users->name}}</p>
<p style="font-size: 20px">Teacher gender:{{$users->gender}}</p>
<p style="font-size: 20px">Teacher email:{{$users->email}}</p>
<p style="font-size: 20px">Teacher address:{{$users->address}}</p>
<p style="font-size: 20px">Teacher mobile:{{$users->mobile}}</p>

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