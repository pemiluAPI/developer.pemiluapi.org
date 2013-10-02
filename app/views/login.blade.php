@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Silahkan login</h1></div>
    <div class="row">
        <div class="col-lg-6">
            {{ Form::open(array('url' => 'login')) }}
                <div class="form-group">
                    {{ Form::label('email', 'Alamat e-mail', array('class' => 'control-label')) }}
                    {{ Form::text('email', Form::getValueAttribute('email'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
                    {{ Form::password('password', array('class' => 'form-control')) }}
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop