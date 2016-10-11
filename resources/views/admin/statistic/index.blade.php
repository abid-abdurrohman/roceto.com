@extends('admin.layouts.app')
@section('title', 'Detail Statistic')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Statistics</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('EventStatisticController@index') }}">Event</a></li>
                        <li class="active">{{ $events->nama }}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Statistic</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.statistic.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                @include('admin.statistic.modal.create')
                                <!-- <a href="{{ action('EventController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a> -->
                              </div>
                              <div class="col-md-6">
                                <div id="datatable_filter" class="dataTables_filter">
                                    {!! Form::open() !!}
                                    <label>Search:
                                      <input name=search type="search" class="form-control input-sm" placeholder="Write something" aria-controls="datatable" required>
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
                                                <th>ID</th>
                                                <th>Participant</th>
                                                <th>Ranking</th>
                                                <th>Created At</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($statistics as $statistic)
                                            <tr>
                                                <td>{{ $statistic->id }}</td>
                                                <td>
                                                    <a href="{{ action('StatisticController@show', array($events->id, $statistic->id)) }}">
                                                      {{ $statistic->nama_participant }}
                                                    </a>
                                                </td>
                                                <td>{{ $statistic->nama_rank }}</td>
                                                <td>{{ $statistic->created_at }}</td>
                                                <td>
                                                  <a href="{{ action('StatisticController@edit', array($events->id, $statistic->id)) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                  </a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $statistic->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                  </a>
                                                </td>
                                            </tr>
                                            @include('admin.statistic.modal.delete', ['id_event' => $events->id, 'id_statistic' => $statistic->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $statistics->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
