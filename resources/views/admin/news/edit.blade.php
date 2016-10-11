@extends('admin.layouts.app')
@section('title', 'Edit Data News')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">News</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('NewsController@index') }}">News</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $news->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($news, ['method' => 'PATCH', 'action' => ['NewsController@update', $news->id], 'files' => true, 'class'=>'form-horizontal']) !!}
                                @include('admin/news/form/form', ['submit_text' => 'Edit News'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
