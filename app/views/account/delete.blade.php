@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Hapus akun</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-danger">
                <strong>Perhatian!</strong> Dengan menghapus akun ini, aplikasi anda tidak akan dapat
                menggunakan Pemilu API
            </div>
            <div class="pull-right">
            {{ Form::open(array('url' => 'account/delete', 'method' => 'delete')) }}
                <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span> Hapus akun ini
                </button>
            {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop