@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>
            Aplikasi saya
            {{ link_to_route('application.create', 'Buat baru', array(), array('class' => 'btn btn-success')) }}
        </h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            @foreach ($applications as $application)

            <!-- Modal -->
            <div class="modal fade"
                 id="deleteApplication{{ $application->id }}"
                 tabindex="-1" role="dialog"
                 aria-labelledby="deleteApplicationLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    {{ Form::open(array('method' => 'delete', 'route' => array('application.destroy', $application->id))) }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Hapus aplikasi</h4>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus aplikasi "{{ $application->title }}"?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus aplikasi</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

            <h3>
                {{ $application->title }}
                {{ HTML::decode(link_to_route(
                    'application.edit',
                    '<span class="glyphicon glyphicon-trash"></span>Edit',
                    $application->id,
                    array('class' => 'btn btn-primary btn-sm'))) }}
                <a href="#deleteApplication{{ $application->id }}" class="btn btn-warning btn-sm" data-toggle="modal">
                    <span class="glyphicon glyphicon-trash"></span> Delete
                </a>
            </h3>
            <p>
                Key: <code>{{ $application->api_key }}</code>
            </p>
            <p>
                {{ $application->description }}
            </p>
            <h4>Endpoint yang digunakan</h4>
            <table class="table table-bordered">
                <tbody>
                    @foreach ($application->endpoints() as $endpoint)
                        @if (in_array($endpoint['slug'], json_decode($application->endpoints)))
                        <tr>
                            <td>{{ $endpoint['name'] }}</td>
                            <td><small>{{ $endpoint['desc'] }}</small></td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            @endforeach

            @if ($applications->count() == 0)
            <div class="alert alert-warning">
                Anda belum membuat aplikasi. {{ link_to_route('application.create', 'Buat sekarang?') }}
            </div>
            @endif
        </div>
    </div>
</div>
@stop