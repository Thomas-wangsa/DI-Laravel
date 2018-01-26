@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Show Detail of information</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                          <tr>
                            <th> Date </th>
                            <th> {{ $data->date }} </th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Max </td>
                                <td> {{ $data->max }} </td>
                            </tr>
                            <tr>
                                <td> Min </td>
                                <td> {{ $data->min }} </td>
                            </tr>
                            <tr>
                                <td> Variance </td>
                                <td> {{ $data->max-$data->min }} </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
