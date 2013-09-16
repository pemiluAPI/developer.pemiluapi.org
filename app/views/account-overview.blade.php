@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Account overview</h1></div>
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Application</th>
                        <th>Key</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Event Foo</td>
                        <td><code>19md98a7d</code></td>
                    </tr>
                    <tr>
                        <td>I am voting!</td>
                        <td><code>899f7s123</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop