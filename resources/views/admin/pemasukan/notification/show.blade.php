@extends('admin.layouts.app')
@section('title', 'Detail Event')
@section('content')

<div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Laporan Pemasukan</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Pemasukan</a></li>
                        <li class="active">kkkk</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Pemasukan </h3>
                        </div>
                        <div class="panel-body">
                           <!--  @include('admin.event.notification.flash') -->
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Participant ID</th>
                                                <th>Nama Event</th>
                                                <th>Jumlah</th>
                                                <th>Created At</th>
                                                <th>Update At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><!-- {{ $events->id }} --></td>
                                                <td><!-- {{ $events->nama }} --></td>
                                                <td><!-- {{ $events->detail }} --></td>
                                                <td><!-- {{ $events->thumbnail }} --></td>
                                                <td><!-- {{ $events->peraturan }} --></td>
                                                <td><!-- {{ $events->created_at }} --></td>
                                                <td><!-- {{ $events->updated_at }} --></td>
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