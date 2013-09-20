@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>
            List of applications
            {{ link_to_route('application.create', 'Create new', array(), array('class' => 'btn btn-success')) }}
        </h1>
    </div>

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

    <div class="row">
        <div class="col-lg-6">
            @foreach ($applications as $application)
            <h3>
                {{ $application->title }}
                {{ link_to_route('application.edit', 'Edit', $application->id, array('class' => 'btn btn-primary')) }}
                <a href="#deleteApplication" class="btn btn-danger" data-toggle="modal">Delete</a>
            </h3>
            <p>
                Key: <code>{{ $application->api_key }}</code>
            </p>
            <p>
                {{ $application->description }}
            </p>
            <h4>Registered endpoints</h4>
            <table class="table table-bordered">
                <tbody>
                    @foreach (json_decode($application->endpoints) as $endpoint)
                    <tr>
                        <td>{{ $endpoint }}</td>
                        <td>Description to be added later ...</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endforeach
        </div>
    </div>
</div>
@stop