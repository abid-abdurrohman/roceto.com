@extends('admin.layouts.app')
@section('title', 'Edit Data Match Team')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Match Teams</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('MatchController@show', [$events->id, $id_part, $matches->id]) }}"> Match Teams</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $match_team->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($match_team, ['method' => 'PATCH', 'action' => ['MatchTeamController@update', $events->id, $id_part, $matches->id, $match_team->id],
                            'class'=>'form-horizontal']) !!}
                                @include('admin/match_team/form/form', ['submit_text' => 'Edit Match Team'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
