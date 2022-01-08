@extends('admin.master')
@section('content')

       @if(session()->has('msg'))
                <p class="alert alert-success">
                {{session()->get('msg')}}
                </p>
           @endif

<h1>Welcome Admin</h1>

@endsection