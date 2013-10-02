@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Buat akun baru</h1></div>
    <div class="row">
        <div class="col-lg-6">
            {{ Form::model($user, array('url' => 'signup')) }}
                <div class="form-group @if($errors->has('email')) has-error @endif">
                    {{ Form::label('email', 'Alamat e-mail', array('class' => 'control-label')) }}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                    {{ Form::text('email', Form::getValueAttribute('email'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group @if($errors->has('name')) has-error @endif">
                    {{ Form::label('name', 'Nama', array('class' => 'control-label')) }}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                    {{ Form::text('name', Form::getValueAttribute('name'), array('class' => 'form-control')) }}
                </div>
                <div class="form-group @if($errors->has('password')) has-error @endif">
                    {{ Form::label('password', 'Password', array('class' => 'control-label')) }}
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                    {{ Form::password('password', array('class' => 'form-control')) }}
                </div>
                <div class="form-group @if($errors->has('password')) has-error @endif">
                    {{ Form::label('password_confirmation', 'Konfirmasi password', array('class' => 'control-label')) }}
                    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                </div>
                <br>
                <p>
                    Dengan membuat akun ini, berarti anda setuju dengan
                    <a href="#" target="_blank">syarat dan ketentuan</a> kami.
                </p>
                <br>
                {{ Form::button('Daftarkan', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop