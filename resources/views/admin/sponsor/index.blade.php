@extends('admin.layouts.app')
@section('title', 'Data Sponsor')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Sponsors</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Sponsors</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Sponsors</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.sponsor.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a href="{{ action('SponsorController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                              </div>
                              <div class="col-md-6">
                              </div>
                            </div><br>
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
                                              <th colspan="2">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($sponsors as $sponsor)
                                          <tr>
                                              <td>{{ $sponsor->id }}</td>
                                              <td><a href="{{ action('SponsorController@show', $sponsor->id) }}">{{ $sponsor->nama_pt }}</a></td>
                                              <td>{{ $sponsor->alamat_pt }}</td>
                                              <td>{{ $sponsor->nama_cp }}</td>
                                              <td>{{ $sponsor->no_hp_cp }}</td>
                                              <td>{{ $sponsor->email_cp }}</td>
                                              <td>{{ $sponsor->created_at }}</td>
                                              <td>
                                                <a href="{{ action('SponsorController@edit', $sponsor->id) }}">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $sponsor->id }}">
                                                  <i class="fa fa-trash"></i> Delete
                                                </a>
                                              </td>
                                          </tr>
                                          @include('admin.sponsor.modal.delete', ['id' => $sponsor->id])
                                        @endforeach
                                      </tbody>
                                  </table>
                                  {!! $sponsors->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
