@extends('admin.layouts.app')
@section('title', 'Detail Match')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Matchs</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('EventMatchController@index') }}">Event</a></li>
                        <li class="active">{{ $events->nama }}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-group panel-group-joined" id="accordion-test">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                        Bracket Competition
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    @include('admin.match.include.bracket')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Match</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.match.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                @if (($id_part == 1 && $count < ($events->kuota/2))||($id_part == 2 && $count < ($events->kuota/4))||($id_part == 3 && $count < ($events->kuota/8))||($id_part == 4 && $count < ($events->kuota/16)))
                                    <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                    @include('admin.match.modal.create', [$events, $id_part])
                                @endif
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
                                                <th>Nama</th>
                                                <th>Waktu</th>
                                                <th>Tempat</th>
                                                <th>Created At</th>
                                                <th colspan="3">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($matches as $match)
                                            <tr>
                                                <td>{{ $match->id }}</td>
                                                <td>
                                                    <a href="{{ action('MatchController@show', [$events->id, $id_part, $match->id]) }}">
                                                      {{ $match->nama }}
                                                    </a>
                                                </td>
                                                <td>{{ $match->waktu }}</td>
                                                <td>{{ $match->tempat }}</td>
                                                <td>{{ $match->created_at }}</td>
                                                @if ($match->status == 'playing')
                                                <td colspan="2">
                                                  <a href="{{ action('EventMatchScoreController@show', [$events->id, $id_part, $match->id]) }}">Update</a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $id_part }}-{{ $match->id }}">
                                                    <i class="fa fa-stop"></i> Done
                                                  </a>
                                                </td>
                                                @elseif ($match->status == 'available')
                                                <td>
                                                  <a href="{{ action('MatchController@edit', [$events->id, $id_part, $match->id]) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                  </a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $match->id }}-{{ $id_part }}-{{ $events->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                  </a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal2-{{ $events->id }}-{{ $id_part }}-{{ $match->id }}">
                                                    <i class="fa fa-play"></i> Start
                                                  </a>
                                                </td>
                                                @else
                                                <td colspan="3">
                                                  <a href="{{ action('EventMatchScoreController@show', [$events->id, $id_part, $match->id]) }}">Detail</a>
                                                </td>
                                                @endif
                                            </tr>
                                            @include('admin.match.modal.delete', ['id_match' => $match->id, 'id_part' => $id_part, 'id_category' => $events->id])
                                            @include('admin.match_score.modal.endmatch', ['id_match' => $match->id])
                                            @include('admin.match_score.modal.startmatch', ['id_match' => $match->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $matches->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->



        </div> <!-- container -->
@endsection
