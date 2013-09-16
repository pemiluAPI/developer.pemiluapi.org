@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Edit application</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <form class="well">
                <div class="form-group">
                    <label>Name</label>
                    <input type="email" class="form-control" value="Hello world">
                </div>
                <div class="form-group">
                    <label>Key</label>
                    <p class="form-control-static"><code>8au1s7rs2r3</code></p>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="4">Some description text here Aenean lacinia bibendum nulla sed consectetur.Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac
consectetur ac, vestibulum at eros.
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Endpoints</label>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="" checked>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@stop