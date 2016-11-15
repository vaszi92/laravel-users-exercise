@extends('app')


@section('content')
<h1 class='text-center'>Search Results</h1>
<div class="table-control">
    <a href="{{ url('users') }}">Back to Users</a>
    <hr>
</div>
@include('partials.table')
@stop