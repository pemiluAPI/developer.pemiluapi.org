@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Semua Application</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-bordered">
                <thead>
                    <tr>                        
                        <th>Title</th>
                        <th>Description</th>
                        <th>Api Key</th>
                        <th>Owner</th>
                        <th>Endpoints</th>
                        <th>Registered On</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->title }}</td>
                        <td>{{ $application->description }}</td>
                        <td><code>{{ $application->api_key }}</code></td>
                        <td>{{ $application->user["name"] }}</td>
                        <td>{{ $application->endpoints }}</td>
                        <td>{{ $application->created_at }}</td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
            {{$applications->links()}}
        </div>
    </div>
</div>
@stop