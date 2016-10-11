@extends('admin.layouts.app')
@section('title', 'Detail Rank')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Rank</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('RankController@index') }}">Rank</a></li>
                        <li class="active">{{$rank->title}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$rank->title}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Daskripsi</th>
                                                <th>Point</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $rank->id }}</td>
                                                <td>{{ $rank->title }}</td>
                                                <td>{{ $rank->deskripsi }}</td>
                                                <td>{{ $rank->point }}</td>
                                                <td>{{ $rank->created_at }}</td>
                                                <td>{{ $rank->updated_at }}</td>
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
