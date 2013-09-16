@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>List of applications <a href="/add-application" class="btn btn-success">Create new</a></h1></div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Hello world <a href="/edit-application" class="btn btn-primary">Edit</a></h3>
            <p>
                Key: <code>8au1s7rs2r3</code>
            </p>
            <p>
                Some description text here Aenean lacinia bibendum nulla sed consectetur. 
                Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                Curabitur blandit tempus porttitor. Maecenas sed diam eget risus
                varius blandit sit amet non magna. Morbi leo risus, porta ac
                consectetur ac, vestibulum at eros.
            </p>
            <h4>Registered endpoints</h4>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Events</td>
                        <td>Curabitur blandit tempus porttitor ...</td>
                    </tr>
                    <tr>
                        <td>Venues</td>
                        <td>Some description text here Aenean ...</td>
                    </tr>
                </tbody>
            </table>

            <h3>Lorem ipsum <a href="/edit-application" class="btn btn-primary">Edit</a></h3>
            <p>
                Key: <code>7syd54t326</code>
            </p>
            <p>
                Some description text here Aenean lacinia bibendum nulla sed consectetur.
                Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
                Curabitur blandit tempus porttitor. Maecenas sed diam eget risus
                varius blandit sit amet non magna. Morbi leo risus, porta ac
                consectetur ac, vestibulum at eros.
            </p>
            <h4>Registered endpoints</h4>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Events</td>
                        <td>Curabitur blandit tempus porttitor ...</td>
                    </tr>
                    <tr>
                        <td>Venues</td>
                        <td>Some description text here Aenean ...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop