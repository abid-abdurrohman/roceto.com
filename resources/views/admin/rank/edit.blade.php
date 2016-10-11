@extends('admin.layouts.app')
@section('title', 'Edit Data Rank')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Ranks</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('RankController@index') }}">Ranks</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $ranks->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($ranks, ['method' => 'PATCH', 'action' => ['RankController@update',
                            $ranks->id], 'class'=>'form-horizontal']) !!}
                                @include('admin/rank/form/form', ['submit_text' => 'Edit Rank'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
