@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>List of Applications</h1></div>
    <div class="row">
        <div class="col-lg-6">
            {{ Form::open(array('url' => 'applications', 'method' => 'get', 'class' => 'form-inline')) }}
                <div class="form-group">
                    {{ Form::Text('query', $query, array('placeholder' => 'Search by title or API Key', 'class' => 'form-control')) }}
                </div>
                {{ Form::button('Search', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
            {{ Form::close() }}
            @foreach ($applications as $application)
                <h3>{{ $application->title }}</h3>
                <p>Owner: {{ $application->user->name }}</p>
                <p>API Key: <code>{{ $application->api_key }}</code></p>
                <p>Endpoints used:</p>
                <table class="table table-bordered">
                    <tbody>
                        @foreach ($application->endpoints() as $slug => $endpoint)
                            @if (in_array($slug, json_decode($application->endpoints)))
                            <tr>
                                <td>{{ $endpoint['name'] }}</td>
                                <td><small>{{ $endpoint['desc'] }}</small></td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <p>{{ $application->description }}</p>
            @endforeach
            {{ $applications->appends(Input::except('page'))->links() }}
        </div>
    </div>
</div>
@stop