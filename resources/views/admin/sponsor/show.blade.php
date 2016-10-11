@extends('admin.layouts.app')
@section('title', 'Detail Sponsor')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Sponsor</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('SponsorController@index') }}">Sponsor</a></li>
                        <li class="active">{{$sponsor->nama_pt}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$sponsor->nama_pt}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Alamat Perusahaan</th>
                                                <th>Nama CP</th>
                                                <th>No HP CP</th>
                                                <th>Email CP</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $sponsor->id }}</td>
                                                <td>{{ $sponsor->nama_pt }}</td>
                                                <td>{{ $sponsor->alamat_pt }}</td>
                                                <td>{{ $sponsor->nama_cp }}</td>
                                                <td>{{ $sponsor->no_hp_cp }}</td>
                                                <td>{{ $sponsor->email_cp }}</td>
                                                <td>{{ $sponsor->created_at }}</td>
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
