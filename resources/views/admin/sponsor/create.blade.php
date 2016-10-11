@extends('admin.layouts.app')
@section('title', 'Create Data Sponsor')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Sponsors</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('SponsorController@index') }}">Sponsors</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Create</h3></div>
                        <div class="panel-body">
                            {!! Form::model(new App\Model\Sponsor, ['action' => 'SponsorController@store', 'files' => true,
                            'class'=>'form-horizontal']) !!}
                                @include('admin/sponsor/form/form', ['submit_text' => 'Create Sponsor'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
