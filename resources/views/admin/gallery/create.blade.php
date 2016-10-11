@extends('admin.layouts.app')
@section('title', 'Create Data Gallery')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Gallery</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('GalleryController@index') }}">Gallerys</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Create Gallery</h3></div>
                        <div class="panel-body">
                            {!! Form::model(new App\Model\Gallery, ['action' => 'GalleryController@store', 'files' => true, 'class'=>'form-horizontal']) !!}
                                @include('admin.gallery.form.form', ['submit_text' => 'Add Gallery'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
