@extends('admin.layouts.app')
@section('title', 'Create Data Event')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Events</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('EventController@index') }}">Events</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Create Event</h3></div>
                        <div class="panel-body">
                            {!! Form::model(new App\Model\Event, ['action' => 'EventController@store', 'class'=>'form-horizontal']) !!}
                                @include('admin.event.form.form', ['submit_text' => 'Add Event'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
