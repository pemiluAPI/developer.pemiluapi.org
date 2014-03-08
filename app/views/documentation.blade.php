@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Dokumentasi</h1></div>
    <div class="row">
        <div class="col-lg-8">
            <p>
                Temukan dokumentasi terbaru API Pemilu di
                {{ link_to('http://developer.pemiluapi.org/endpoints', 'Endpoints', array('target' => '_blank')) }}
            </p>
        </div>
    </div>
</div>
@stop