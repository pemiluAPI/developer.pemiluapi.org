@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Create an account</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <form class="well">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input type="text" class="form-control" placeholder="Password confirmation">
                </div>
                <p>
                    By creating an account, you agree to PemiluAPI's Terms & Conditions.
                </p>
                <button type="submit" class="btn btn-primary">Sign up</button>
            </form>
        </div>
    </div>
</div>
@stop