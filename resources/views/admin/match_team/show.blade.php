@extends('admin.layouts.app')
@section('title', 'Detail MatchTeam')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">MatchTeams</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">MatchTeams</a></li>
                        <li class="active">{{ $match_teams->id }}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data </h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.match_team.notification.flash')
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>No Match</th>
                                                <th>Created At</th>
                                                <th>Update At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $match_teams->id }}</td>
                                                <td>{{ $match_teams->nama_participant }}</td>
                                                <td>{{ $match_teams->match_id }}</td>
                                                <td>{{ $match_teams->created_at }}</td>
                                                <td>{{ $match_teams->updated_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if ( !$match_scores->count() )
                    				    <h4>Belum memiliki score.</h4>
                    				@else
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Member</th>
                                                <th>Score</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $match_scores as $match_score )
                                              <tr>
                                                  <td>{{ $match_score->id }}</td>
                                                  <td>
                                                    <a href="{{ action('MatchScoreController@show', [$categories->id, $matches->id, $match_teams->id, $match_score->id]) }}">
                                                      {{ $match_score->nama_member }}
                                                    </a>
                                                  </td>
                                                  <td>{{ $match_score->score }}</td>
                                                  <td>{{ $match_score->created_at }}</td>
                                                  <td>{{ $match_score->updated_at }}</td>
                                                  <td>
                                                    <a href="{{ action('MatchScoreController@edit', [$categories->id, $matches->id, $match_teams->id, $match_score->id]) }}">
                                                      <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                  </td>
                                                  <td>
                                                    <a href="#" data-toggle="modal" data-target="#myModal-{{ $categories->id }}-{{ $matches->id }}-{{ $match_teams->id }}-{{ $match_score->id }}">
                                                      <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                  </td>
                                              </tr>
                                              @include('admin.match_score.modal.delete', ['id_category' => $categories->id, 'id_match' => $matches->id, 'id_team' => $match_teams->id])
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif
                            <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-{{ $categories->id }}-{{ $matches->id }}-{{ $match_teams->id }}">Add <i class="fa fa-plus"></i></a>
                            @include('admin.match_score.modal.create', ['id_category' => $categories->id, 'id_match' => $matches->id, 'id_team' => $match_teams->id])
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
