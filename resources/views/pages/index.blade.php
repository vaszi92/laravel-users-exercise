@extends('app')


@section('content')
<h1 class='text-center'>Laravel Exercise Users</h1>

<div class="table-control">
    <a href="{{ url('index/create') }}">+ Add New User</a>
    <hr>
    @include('partials.search')
</div>
@include('partials.table')
@stop
