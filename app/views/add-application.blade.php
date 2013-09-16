@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Create an application</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <form class="well">
                <div class="form-group">
                    <label>Name</label>
                    <input type="email" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="4" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <label>Endpoints</label>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Events &mdash;<small>Lacinia bibendum nulla sed consectetur.</small>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Venues &mdash;<small>Curabitur blandit tempus porttitor</small>
                        </label>
                    </div>
                </div>
                <p>
                    By creating an application, you agree to PemiluAPI's Terms & Conditions.
                </p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@stop