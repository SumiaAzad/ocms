@extends('admin.master')
@section('content')

<form class="print_order">
    <input class="btn btn-primary" type="button" onclick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">

<h2>User Details</h2>
 
<p>        
  <img src="{{url('/uploads/'.$users->image)}}" width="200px" alt="studentimage">
</p>
<p style="font-size: 20px">User id:{{$users->user_id}}</p>
<p style="font-size: 20px">User name:{{$users->name}}</p>
<p style="font-size: 20px">User address:{{$users->address}}</p>
<p style="font-size: 20px">User mobile:{{$users->mobile}}</p>
<p style="font-size: 20px">User gender:{{$users->gender}}</p>
<p style="font-size: 20px">User birth:{{$users->birth}}</p>
<p style="font-size: 20px">User class:{{$users->class}}</p>
<p style="font-size: 20px">User email:{{$users->email}}</p>
<p style="font-size: 20px">User join date:{{$users->join}}</p>
<p style="font-size: 20px">User father name:{{$users->father_name}}</p>
<p style="font-size: 20px">User father mobile:{{$users->father_mobile}}</p>
<p style="font-size: 20px">User mother name:{{$users->mother_name}}</p>
<p style="font-size: 20px">User mother mobile:{{$users->mother_mobile}}</p>


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