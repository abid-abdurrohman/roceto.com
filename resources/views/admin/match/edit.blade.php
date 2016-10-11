@extends('admin.layouts.app')
@section('title', 'Edit Data Match')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Matches</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('MatchController@index', [$events->id, $id_part]) }}">Matches</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $matches->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($matches, ['method' => 'PATCH', 'action' => ['MatchController@update', $events->id, $id_part, $matches->id],
                            'class'=>'form-horizontal']) !!}
                                @include('admin/match/form/form', ['submit_text' => 'Edit Match'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
