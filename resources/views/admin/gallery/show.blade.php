@extends('admin.layouts.app')
@section('title', 'Detail Gallery')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Gallery</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('GalleryController@index') }}">Gallery</a></li>
                        <li class="active">{{$gallery->judul}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$gallery->judul}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Thumbnail</th>
                                                <th>Event</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $gallery->id }}</td>
                                                <td>{{ $gallery->judul }}</td>
                                                <td>{{ $gallery->deskripsi }}</td>
                                                <td>{{ $gallery->thumbnail }}</td>
                                                <td>{{ $gallery->nama_event }}</td>
                                                <td>{{ $gallery->created_at }}</td>
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
