@extends('admin.master')
@section('content')

<form class="print_order">
    <input class="btn btn-primary" type="button" onclick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">

<h4>User Details</h1>
 
<p>        
  <img src="{{url('/uploads/'.$users->image)}}" width="100px" alt="studentimage">
</p>
<p>User name:{{$users->name}}</p>
<p>User address:{{$users->address}}</p>
<p>User mobile:{{$users->mobile}}</p>

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