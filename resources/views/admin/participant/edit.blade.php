@extends('admin.layouts.app')
@section('title', 'Edit Data Participant')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Participant</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('ParticipantController@event_index') }}">Participant</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $participants->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($participants, ['method' => 'PATCH', 'action' => ['ParticipantController@update', $events->id, $participants->id], 'files' => true, 'class'=>'form-horizontal']) !!}
                                @include('admin/participant/form/form', ['submit_text' => 'Edit Participant'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
