@extends('app')


@section('content')
<h1 class='text-center'>Search Results</h1>
<div class="table-control">
    <a href="{{ url('index') }}">Back to Index</a>
    <hr>
    @include('partials.search')
</div>
@include('partials.table')
@stop