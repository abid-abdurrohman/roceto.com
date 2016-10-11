@extends('admin.layouts.app')
@section('title', 'Detail Match')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Match</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('MatchController@index', [$events->id, $id_part]) }}">Match</a></li>
                        <li class="active"></li>
                    </ol>
                </div>
            </div>
            @if ($count->count() == '2')
            <div class="row">
                <div class="col-sm-6 col-lg-5">
                  <div class="panel">
                    <div class="panel-body">
                        <div class="media-main">
                          <center>
                            <img class="thumb-lg" src="{!! asset('').$teams[0]['logo_participant'] !!}" alt="">
                            <h4>{{ $teams[0]['nama_participant'] }}</h4>
                          </center>
                        </div>
                    </div>
                  </div>
                </div> <!-- end col -->
                <div class="col-sm-6 col-lg-2">
                  <div class="media-main">
                    <center>
                      <h1 style="padding-top:130px; padding-bottom:130px; ">VS</h1>
                    </center>
                  </div>
                </div> <!-- end col -->

                <div class="col-sm-6 col-lg-5">
                  <div class="panel">
                    <div class="panel-body">
                      <div class="media-main">
                        <center>
                          <img class="thumb-lg" src="{!! asset('').$teams[1]['logo_participant'] !!}" alt="">
                          <h4>{{ $teams[1]['nama_participant'] }}</h4>
                        </center>
                      </div>
                    </div>
                  </div>
                </div> <!-- end col -->
            </div> <!-- End row -->
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data </h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.match.notification.flash')
                            <div class="row">
                              <div class="col-md-12">
                                  @if ($count->count() != '2')
                                      <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                      @include('admin.match_team.modal.create', [$events, $id_part, $matches])
                                  @endif
                              </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Team</th>
                                                <th>Score</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $match_teams as $match_team )
                                              <tr>
                                                  <td>{{ $match_team->id }}</td>
                                                  <td>
                                                    <a href="{{ action('ParticipantController@show', array($events->id, $id_part, $match_team->participant_id)) }}">
                                                    {{ $match_team->nama_participant }}
                                                    </a>
                                                  </td>
                                                  <td>{{ $match_team->score }}</td>
                                                  <td>{{ $match_team->created_at }}</td>
                                                  <td>{{ $match_team->updated_at }}</td>
                                                  <td>
                                                    <a href="{{ action('MatchTeamController@edit', array($events->id, $id_part, $matches->id, $match_team->id)) }}">
                                                      <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                  </td>
                                                  <td>
                                                    <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $id_part }}-{{ $matches->id }}-{{ $match_team->id }}">
                                                      <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                  </td>
                                              </tr>
                                              @include('admin.match_team.modal.delete', ['id_event' => $events->id, 'id_part' => $id_part, 'id_match' => $matches->id, 'id_team' => $match_team->id])
                                            @endforeach
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
