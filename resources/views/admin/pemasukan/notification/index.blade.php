@extends('admin.layouts.app')
@section('title', 'Data Event')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Laporan Pemasukan</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Pemasukan</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Keuangan</h3>
                        </div>
                        <div class="panel-body">
                           <!--  @include('admin.event.notification.flash') -->
                            <div class="row">
                              <div class="col-md-5">
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                               
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
                                                <th>Nama</th>
                                                <th>Participant ID</th>
                                                <th>Event ID</th>
                                                <th>Created At</th>
                                                <th>Update At</th>
                                                <th>Jumlah</th>
                                              <th colspan="3"><center>Action</center></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                       @foreach ($pemasukan as $pemasukan)
                                       <tr>
                                              <td>{{ $pemasukan->id }}</td>
                                              <td>{{ $pemasukan->nama }}</td>
                                              <td>{{ $pemasukan->participant_id }}</td>
                                              <td>{{ $pemasukan->nama_event }}</td>
                                              <td>{{ $pemasukan->created_at }}</td>
                                              <td>{{ $pemasukan->updated_at }}</td>
                                              <td>{{ $pemasukan->jumlah }}</td>
                                               <td>
                                                <a href="#">
                                                  <i class="fa fa-tasks"></i> Detail
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#" data-toggle="modal" data-target="">
                                                  <i class="fa fa-trash"></i> Delete
                                                </a>
                                              </td>
                                          </tr>
                                          @endforeach
                                          </tbody>
                                           @if ( $pemasukan->count() )
                                              <tr>
                                              <td colspan="6"><center><b>Total</b></center></td>
                                              <td>{{ $sum }}</td>                                              
                                              <td colspan="3"></td>
                                          </tr>
                                         @endif                                     
                                  </table>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
