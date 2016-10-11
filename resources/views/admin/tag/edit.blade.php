@extends('admin.layouts.app')
@section('title', 'Edit Data Tag')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Tags</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('TagController@index') }}">Tags</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $tags->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($tags, ['method' => 'PATCH', 'action' => ['TagController@update', $tags->id],
                            'files' => true, 'class'=>'form-horizontal']) !!}
                                @include('admin/tag/form/form', ['submit_text' => 'Edit Tag'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
