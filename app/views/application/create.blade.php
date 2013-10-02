@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Membuat aplikasi</h1></div>
    <div class="row">
        <div class="col-lg-6">
            {{ Form::model($application, array('route' => array('application.store'))) }}
                <div class="form-group @if($errors->has('title')) has-error @endif">
                    {{ Form::label('title', 'Nama', array('class' => 'control-label')) }}
                    <small class="text-danger">{{ $errors->first('title') }}</small>
                    {{ Form::text('title', Form::getValueAttribute('title'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('description', 'Deskripsi', array('class' => 'control-label')) }}
                    {{ Form::textarea('description', Form::getValueAttribute('description'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group @if($errors->has('endpoints')) has-error @endif">
                    <label class="control-label">Endpoint yang digunakan</label>
                    <small class="text-danger">{{ $errors->first('endpoints') }}</small>
                    @foreach($application->endpoints as $endpoint)
                    <div class="checkbox">
                        <label>
                            <?php $checked = is_null(Input::old('endpoints')) ? false : in_array($endpoint['slug'], Input::old('endpoints')); ?>
                            {{ Form::checkbox('endpoints[]', $endpoint['slug'], $checked) }}
                            {{ $endpoint['name'] }} &mdash;<small>{{ $endpoint['desc'] }}</small>
                        </label>
                    </div>
                    @endforeach
                </div>
                <br>
                <p>
                    Dengan membuat aplikasi ini, berarti anda setuju dengan
                    <a href="#" target="_blank">syarat dan ketentuan</a> kami.
                </p>
                <br>
                {{ Form::button('Submit', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
