@extends('admin.layouts.app')
@section('title', 'Detail Comment')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Comment</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('NewsController@show', $news->id) }}">Comment</a></li>
                        <li class="active">{{$news->nama}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$comment->nama}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ID User</th>
                                                <th>Comment</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $comment->id }}</td>
                                                <td>{{ $comment->user_id }}</td>
                                                <td>{{ $comment->comment }}</td>
                                                <td>{{ $comment->created_at }}</td>
                                                <td>{{ $comment->updated_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
