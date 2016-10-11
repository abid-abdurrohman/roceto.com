@extends('admin.layouts.app')
@section('title', 'Edit Data Event')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Events</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('EventController@index') }}">Events</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $events->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($events, ['method' => 'PATCH', 'files' => true, 'action' => ['EventController@update', $events->id],
                            'class'=>'form-horizontal']) !!}
                                @include('admin/event/form/form', ['submit_text' => 'Edit Event'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
