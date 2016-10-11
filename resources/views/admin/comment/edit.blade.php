@extends('admin.layouts.app')
@section('title', 'Edit Data Comment')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Comment</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('NewsController@show', $news->id) }}">Comment</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $comment->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($comment, ['method' => 'PATCH', 'action' => ['CommentController@update', $news->id, $comment->id],'class' => 'form-horizontal']) !!}
                                @include('admin/comment/form/form', ['submit_text' => 'Edit News'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
