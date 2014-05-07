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
                 <h3>{{ $application->title }}</h3>
                 <h4>{{ $application->description }}</h4>
                 <p><code>{{ $application->api_key }}</code></p>
                 <p>{{ $application->user["name"] }}</p>
                 <?php $endpoints = json_decode($application->endpoints) ?>
                 @if (!is_null($endpoints))
                     Endpoints:
                     <ul>
                         @for ($i=0; $i < count($endpoints); $i++)                       
                             <li>{{$endpoints[$i]}}</li>
                         @endfor
                     </ul>                       
                 @endif
                 <p>{{ date("d-m-Y H:i:s",strtotime($application->created_at)) }}</p>
             @endforeach
             {{$applications->appends(Input::except('page'))->links()}}
        </div>
    </div>
</div>
@stop