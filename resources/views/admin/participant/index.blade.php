@extends('admin.layouts.app')
@section('title', 'Data Participant')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Participants</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
<<<<<<< HEAD
                         <li><a href="{{ action('ParticipantController@event_index') }}">Participant Event</a></li>
                        <li class="active">Participants</li>
=======
                        <li><a href="{{ action('ParticipantController@event_index')}}">Participants Events</a></li>                        
                        <li class="active">Participant</li>
                        
>>>>>>> 0f9f3dbc03cf55916a9ad0045ba70ed188e69714
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Participants</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.participant.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                              </div>
                              <div class="col-md-6">
                                <div id="datatable_filter" class="dataTables_filter">
                                    {!! Form::open(['action' => 'ParticipantController@search']) !!}
                                    <label>Search:
                                      <input name=search type="search" class="form-control input-sm" placeholder="Write something" aria-controls="datatable" required>
                                    {!! Form::close() !!}
                                  </label>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="success">
                                                <th><center>ID</center></th>
                                                <th><center>Tim</center></th>
                                                <th><center>No Hp</center></th>
                                                <th><center>User Id</center></th>
                                                <th><center>Status</center></th>
                                                <th colspan="2"><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($participants as $participant)
                                            <tr>
                                                <td>{{ $participant->id }}</td>
                                                <td>{{ $participant->nama_tim }}</td>
                                                <td>{{ $participant->no_hp }}</td>
                                                <td>{{ $participant->user_id }}</td>
                                                <td>{{ $participant->status }}</td>

                                                @if ($participant->status=='waiting')
                                                    <td><center><a href="{{ action('ParticipantController@bukti_pembayaran', [ $events->id, $participant->id]) }}" class="label label-info" >Check</a></center></td>
                                                    <td><center><a href="{{ action('ParticipantController@show', [ $events->id,$participant->id]) }}" class="label label-info">Detail</a></center></td>
                                                    @else
                                                <td>
                                                <center>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $participant->id }}" class="label label-danger">Delete</a>
                                                </center>
                                                  </td>
                                                <td><center><a href="{{ action('ParticipantController@show', [ $events->id,$participant->id]) }}" class="label label-info">Detail</a>
                                                </center>
                                                </td>
                                                @endif
                                            </tr>
                                            @include('admin.participant.modal.delete', ['id' => $events->id, 'id_participant'=> $participant->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $participants->links() !!}
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
