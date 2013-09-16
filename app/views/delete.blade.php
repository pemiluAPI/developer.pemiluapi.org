@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Delete account</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <p>
                By deleting your account, your applications will be no longer able to
                use the Pemilu API
            </p>
            <form>
                <button type="submit" class="btn btn-danger">Delete my account</button>
            </form>
        </div>
    </div>
</div>
@stop