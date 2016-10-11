@extends('admin.layouts.app')
@section('title', 'Edit Data Match Score')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Match Scores</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('MatchTeamController@show', [$categories->id, $matches->id, $match_teams->id]) }}">Match Team</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $match_scores->member_id }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($match_scores, ['method' => 'PATCH', 'action' => ['MatchScoreController@update', $categories->id, $matches->id, $match_teams->id, $match_scores->id],
                            'class'=>'form-horizontal']) !!}
                                @include('admin/match_score/form/form', ['submit_text' => 'Edit Match Score'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
