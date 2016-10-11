@extends('admin.layouts.app')
@section('title', 'Detail Event')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Events</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('EventController@index') }}">Events</a></li>
                        <li class="active">{{$events->nama}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Detail Event {{ $events->nama }} </h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.event.notification.flash')
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><center>ID</center></th>
                                                <th><center>Nama</center></th>
                                                <th><center>Detail</center></th>
                                                <th><center>Thumbnail</center></th>
                                                <th><center>Peraturan</center></th>
                                                <th><center>Biaya</center></th>
                                                <th><center>Kuota</center></th>
                                                <th><center>Created At</center></th>
                                                <th><center>Update At</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $events->id }}</td>
                                                <td>{{ $events->nama }}</td>
                                                <td>{{ $events->detail }}</td>
                                                <td><a href="{!! asset('').'/'.$events->thumbnail !!}" class="image-popup" title="{{ $events->nama }}"> {{ $events->thumbnail }}</a> </td>
                                                <td>{{ $events->peraturan }}</td>
                                                <td>{{ $events->biaya_pendaftaran }}</td>
                                                <td>{{ $events->kuota }}</td>
                                                <td>{{ $events->created_at }}</td>
                                                <td>{{ $events->updated_at }}</td>
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
