@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Membuat aplikasi</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <p class="lead">
                Untuk menggunakan PemiluAPI, anda membutuhkan key.
                Dapatkan key dengan cara membuat aplikasi.
            </p>
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
                    <br/>
                    <hr/>
                    <strong>PEMILU 2014</strong>
                    @foreach($application->endpoints as $slug => $endpoint)
                        @if ($endpoint['kind'] === "pemilu2014")
                            <div class="checkbox">
                                <label>
                                    <?php $checked = is_null(Input::old('endpoints')) ? false : in_array($slug, Input::old('endpoints')); ?>
                                    {{ Form::checkbox('endpoints[]', $slug, $checked) }}
                                    {{ $endpoint['name'] }} &mdash; <small>{{ $endpoint['desc'] }}</small>
                                </label>
                            </div>
                        @endif
                    @endforeach
                    <hr/>
                    <strong>PILKADA 2015</strong>
                    @foreach($application->endpoints as $slug => $endpoint)
                        @if ($endpoint['kind'] === "pilkada2015")
                            <div class="checkbox">
                                <label>
                                    <?php $checked = is_null(Input::old('endpoints')) ? false : in_array($slug, Input::old('endpoints')); ?>
                                    {{ Form::checkbox('endpoints[]', $slug, $checked) }}
                                    {{ $endpoint['name'] }} &mdash; <small>{{ $endpoint['desc'] }}</small>
                                </label>
                            </div>
                        @endif
                    @endforeach
                </div>
                <br>
                <p>
                    Dengan membuat aplikasi, berarti anda setuju dengan
                    {{ link_to('terms', 'syarat dan ketentuan') }} kami.
                </p>
                <br>
                {{ Form::button('Submit', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
