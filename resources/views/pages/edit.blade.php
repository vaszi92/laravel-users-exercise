@extends('app')

@section('content')
<div class="table-control">
    <h1>Edit {!! $user->username !!}</h1>
        <a href="{{ url('users') }}">Back to Users</a>
        <hr>
    
    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UsersController@update', $user->id]]) !!}
    
        @include('pages.editform', ['submitButtonText'=>'Update Article'])
    
    {!! Form::close()!!}
</div>
@stop