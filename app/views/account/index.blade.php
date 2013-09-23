@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>My Account</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <a href="/account/delete" class="btn btn-warning">
                <span class="glyphicon glyphicon-trash"></span> Delete this account
            </a>

            <br><br>

            @if ($applications->count() == 0)
            <div class="alert alert-warning">
                You haven't created any application. {{ link_to_route('application.create', 'Create one?') }}
            </div>
            @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Application</th>
                        <th>Key</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->title }}</td>
                        <td><code>{{ $application->api_key }}</code></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@stop