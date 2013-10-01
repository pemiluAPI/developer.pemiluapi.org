@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>List of API endpoints</h1></div>
    <div class="row">
        <div class="col-lg-6">
            @foreach ($endpoints as $endpoint)
            <h3>{{ $endpoint['name'] }}</h3>
            <p>{{ $endpoint['desc'] }}</p>
            <p>
                Documentation: <a href="{{ $endpoint['docs'] }}" target="_blank">{{ $endpoint['docs'] }}</a>
            </p>
            @endforeach
        </div>
    </div>
</div>
@stop