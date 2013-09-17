@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>List of applications <a href="/add-application" class="btn btn-success">Create new</a></h1></div>
    <div class="row">
        <div class="col-lg-6">
            <h3>
                Hello world
                <a href="/edit-application" class="btn btn-primary">Edit</a>
                <a href="#deleteApplication" class="btn btn-danger" data-toggle="modal">Delete</a>
            </h3>

            <!-- Modal -->
            <div class="modal fade" id="deleteApplication" tabindex="-1" role="dialog" aria-labelledby="deleteApplicationLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Delete application</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete application "Hello world"?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger">Delete application</button>
                        </div>
                    </div>
                </div>
            </div>

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

            <h3>
                Lorem ipsum
                <a href="/edit-application" class="btn btn-primary">Edit</a>
                <a href="#deleteApplication" class="btn btn-danger" data-toggle="modal">Delete</a>
            </h3>
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