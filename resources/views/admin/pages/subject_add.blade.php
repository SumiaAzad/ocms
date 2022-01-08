@extends('admin.master')
@section('content')



@if(session()->has('msg'))
<p class="alert alert-success">
    {{session()->get('msg')}}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('admin.subject.store')}}" method='post'>
    @csrf
    <div class="row">
        <div class="col-12">
            <h5 class="form-title"><span>Subject Information</span></h5>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Teacher</label>
                <select required name='teacher' type="text" class="form-control">
                    <option > select one</option>
                    @foreach($data as $g)
                    <option value="{{$g->id}}">{{$g->teacher}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Subject</label>
                <select required name='sub_name' type="text" class="form-control">
                <option > select one</option>
                    @foreach($data as $g)
                    <option value="{{$g->id}}">{{$g->subject}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Class</label>
                <select required name='class' type="text" class="form-control">
                <option > select one</option>
                    @foreach($data as $g)
                    <option value="{{$g->id}}">{{$g->class}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection
