@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Please sign in</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <form class="well">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
            </form>
        </div>
    </div>
</div>
@stop