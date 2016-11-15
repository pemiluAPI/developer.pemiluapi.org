@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>List of API endpoints</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <p class="lead">
                Endpoint, the entry point to a service, a process,
                or a queue or topic destination in service-oriented architecture.
            </p>

            <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#pemilu2014">Pemilu 2014</a></li>
                <li><a data-toggle="tab" href="#pilkada2015">Pemilu 2015</a></li>
                <li class="active"><a data-toggle="tab" href="#pilkada2017">Pemilu 2017</a></li>
            </ul>

            <div class="tab-content">
                <div id="pemilu2014" class="tab-pane fade">
                    @foreach ($endpoints as $endpoint)
                        @if ($endpoint['kind'] === "pemilu2014")
                            <h3>{{ $endpoint['name'] }}</h3>
                            <p>{{ $endpoint['desc'] }}</p>
                            <p>
                                Tautan ke dokumentasi: <a href="{{ $endpoint['docs'] }}" target="_blank">{{ $endpoint['docs'] }}</a>
                            </p>
                        @endif
                    @endforeach
                </div>

                <div id="pilkada2015" class="tab-pane fade">
                    @foreach ($endpoints as $endpoint)
                        @if ($endpoint['kind'] === "pilkada2015")
                            <h3>{{ $endpoint['name'] }}</h3>
                            <p>{{ $endpoint['desc'] }}</p>
                            <p>
                                Tautan ke dokumentasi: <a href="{{ $endpoint['docs'] }}" target="_blank">{{ $endpoint['docs'] }}</a>
                            </p>
                        @endif
                    @endforeach
                </div>

                <div id="pilkada2017" class="tab-pane fade in active">
                    @foreach ($endpoints as $endpoint)
                        @if ($endpoint['kind'] === "pilkada2017")
                            <h3>{{ $endpoint['name'] }}</h3>
                            <p>{{ $endpoint['desc'] }}</p>
                            <p>
                                Tautan ke dokumentasi: <a href="{{ $endpoint['docs'] }}" target="_blank">{{ $endpoint['docs'] }}</a>
                            </p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop