@extends('admin.layouts.app')
@section('title', 'Create Data News')
@section('content')
<div class="container">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">News</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Admin</a></li>
                <li><a href="{{ action('NewsController@index') }}">News</a></li>
                <li class="active">Create</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Create News</h3></div>
                <div class="panel-body">
                  @include('admin.news.form.form', ['submit_text' => 'Add News'])
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div> <!-- End row -->
</div> <!-- container -->
@endsection
