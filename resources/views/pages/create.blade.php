@extends('app')

@section('content')
<div class="table-control">
    <h1>Create new user</h1>
    <a href="{{ url('index') }}">Back to Users</a>
    <hr>
    
    {!! Form::open(['url'=>'index']) !!}
    
       @include('pages.form', ['submitButtonText'=>'Add User'])
    
    {!! Form::close()!!}
    
</div> 
@stop
