@extends('admin.master')
@section('content')

<form action="{{route('admin.payment.store')}}" method='post'>
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Payment Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Payment ID</label>
<input name='pay_id' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Payment Type</label>
<select name='pay_type' class="form-control">
<option>Select Type</option>
<option>Class Test</option>
<option>Exam Fees</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class</label>
<select name='class' class="form-control">
<option>Select Class</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Payment Amount</label>
<input name='amount' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Start Date</label>
<input name='start_date' type="date" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>End Date</label>
<input name='end_date' type="date" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection