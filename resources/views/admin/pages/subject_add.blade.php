@extends('admin.master')
@section('content')

<form action="{{route('admin.subject.store')}}" method='post'>
  @csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Subject Information</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Subject ID</label>
<input name='sub_id' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Subject Name</label>
<input name='sub_name' type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Class</label>
<input name='class' type="text" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection