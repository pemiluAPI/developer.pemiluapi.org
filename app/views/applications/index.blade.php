@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>List of Applications</h1></div>
    <div class="row">
        <div class="col-lg-6">
            {{ Form::open(array('url' => 'applications', 'method' => 'get', 'class' => 'form-inline')) }}
                 <div class="form-group">
                     {{ Form::Text('query', null, array('placeholder' => 'Kata Pencarian...', 'class' => 'form-control')) }}                    
                 </div>
                 {{ Form::button('Search', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
             {{ Form::close() }}
             @foreach ($applications as $application)
                 @if (!empty($application->title))
                    <h3>App Name: {{ $application->title }}</h3>
                 @endif
                 @if (!empty($application->description))
                    <h4>Description: {{ $application->description }}</h4>
                 @endif
                 @if (!empty($application->api_key))
                    <p>Key: <code>{{ $application->api_key }}</code></p>
                 @endif
                 @if (!empty($application->user_id))
                    <p>Username: {{ $application->user["name"] }}</p>
                 @endif
                 <?php $endpoints = json_decode($application->endpoints) ?>
                 @if (!is_null($endpoints))
                     Endpoints:
                     <ul>
                         @for ($i=0; $i < count($endpoints); $i++)                       
                             <li>{{$endpoints[$i]}}</li>
                         @endfor
                     </ul>
                 @endif
                 @if (!empty($application->created_at))
                    <p>Created Date: {{ date("d-m-Y H:i:s",strtotime($application->created_at)) }}</p>
                 @endif
             @endforeach
             {{$applications->appends(Input::except('page'))->links()}}
        </div>
    </div>
</div>
@stop