@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Dashboard
                    <span> 
                        <a href="/create" class="btn btn-primary pull-right">
                            Create
                        </a>
                    </span>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Date </th>
                            <th> Max </th>
                            <th> Min </th>
                            <th> Variance </th>
                            <th> Edit </th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($data['data'] as $key=>$val)
                            <tr> 
                                <td>  {{ $no }} </td>
                                <td style="color:blue;cursor: pointer;">
                                    <a href="/show?uuid={{$val->uuid}}" >  
                                    {{ $val->date }}
                                    </a> 
                                </td>
                                <td>  {{ $val->max }} </td>
                                <td>  {{ $val->min }} </td>
                                <td>  {{ $val->max - $val->min }} </td>
                                <td>
                                    <a href="/edit?uuid={{$val->uuid}}" class="btn btn-warning">
                                    Edit
                                    </a>
                                </td>
                            </tr>
                            <?php $no++;?>   
                            @endforeach
                            <tr>
                                <td colspan="2" class="text-center">  Average </td>
                                <td>  {{ $data['calculation']['avg_max'] }} </td>
                                <td>  {{ $data['calculation']['avg_min'] }} </td>
                                <td>  {{ $data['calculation']['avg_var'] }} </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
