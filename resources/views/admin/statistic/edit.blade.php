@extends('admin.layouts.app')
@section('title', 'Edit Data Statistic')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Statistic</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('EventStatisticController@show', [$events->id]) }}">Statistic</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit Statistic</h3></div>
                        <div class="panel-body">
                            {!! Form::model($statistics, ['method' => 'PATCH', 'action' => ['StatisticController@update', $events->id, $statistics->id],
                            'class'=>'form-horizontal']) !!}
                                @include('admin/statistic/form/form', ['submit_text' => 'Edit Statistic'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
