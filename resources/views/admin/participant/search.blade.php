@extends('admin.layouts.app')
@section('title', 'Search Data Participant')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">participants</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">participants</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data participants</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-md-5">
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                @include('admin.participant.modal.create')
                                <!-- <a href="{{ action('participantController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a> -->
                              </div>
                              <div class="col-md-6">
                                <div id="datatable_filter" class="dataTables_filter">
                                    {!! Form::open(['action' => 'participantController@search']) !!}
                                      <label>Search:
                                        <input name=search value="{{ $temp_search }}" type="search" class="form-control input-sm" placeholder="Write something" aria-controls="datatable">
                                    {!! Form::close() !!}
                                  </label>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama participant</th>
                                                <th>Detail participant</th>
                                                <th>Waktu</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($participants as $participant)
                                            <tr>
                                                <td>{{ $participant->id }}</td>
                                                <td><a href="{{ action('participantController@show', $participant->id) }}">{{ $participant->nama }}</a></td>
                                                <td>{{ $participant->detail }}</td>
                                                <td>{{ $participant->created_at }}</td>
                                                <td>
                                                  <a href="{{ action('participantController@edit', $participant->id) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                  </a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-trash"></i> Delete
                                                  </a>
                                                </td>
                                            </tr>
                                            @include('admin.participant.modal.delete', ['id' => $participant->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $participants->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
