@extends('admin.layouts.app')
@section('title', 'Create Data Comment')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Comment</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('NewsController@show', $news->id) }}">Comment</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Create Comment</h3></div>
                        <div class="panel-body">
                            {!! Form::open(array('class' => 'form-horizontal', 'method' => 'POST', 'action' => array('CommentController@store',
                            $news->id))) !!}
                                @include('admin.comment.form.form', ['submit_text' => 'Add Comment'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
