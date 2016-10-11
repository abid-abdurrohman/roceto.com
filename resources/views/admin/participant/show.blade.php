@extends('admin.layouts.app')
@section('title', 'Detail Participant')
@section('content')
<div class="container">

<<<<<<< HEAD
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Participants</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('ParticipantController@show_event', [ $events->id, $participants->id]) }}">Participants</a></li>
                        <li class="active">{{$participants->nama}}</li>
                    </ol>
=======
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Participants</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Admin</a></li>
                <li><a href="{{ action('ParticipantController@event_index') }}">Participants Events</a></li>
                <li><a href="{{ action('ParticipantController@show_event', [$events->id]) }}">Participants</a></li>
                <li class="active">{{$participants->nama}}</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data {{$participants->nama}}</h3>
                </div>
                <div class="panel-body">
                    @include('admin.event.notification.flash')
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Tim</th>
                                        <th>Logo Tim</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Warna Kostum</th>
                                        <th>Jumlah Pemain</th>
                                        <th>Biaya</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th colspan="1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $participants->id }}</td>
                                        <td>{{ $participants->nama_tim }}</td>
                                        <td><a href="{!! asset('').'/'.$participants->logo_tim  !!}" class="image-popup" title="{{ $participants->logo_tim  }}"> {{ $participants->logo_tim }} </a></td>
                                        <td>{{ $participants->no_hp }}</td>
                                        <td>{{ $participants->email }}</td>
                                        <td>{{ $participants->warna_kostum }}</td>
                                        <td>{{ $participants->jumlah_pemain }}</td>
                                        <td>{{ $participants->biaya_pendaftaran }}</td>
                                        <td>{{ $participants->created_at }}</td>
                                        <td>{{ $participants->updated_at }}</td>
                                        <td>
                                          <a href="{{ action('ParticipantController@edit', [ $events->id, $participants->id]) }}" class="label label-success">Edit</a></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>

>>>>>>> 0f9f3dbc03cf55916a9ad0045ba70ed188e69714


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$participants->nama}}</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.event.notification.flash')
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="success" >
                                                <th><center>ID</center></th>
                                                <th><center>Tim</center></th>
                                                <th><center>Logo</center></th>
                                                <th><center>No Hp</center></th>
                                                <th><center>Email</center></th>
                                                <th><center>Kostum</center></th>
                                                <th><center>Jumlah Pemain</center></th>
                                                <th><center>Biaya</center></th>
                                                <th colspan="2"><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $participants->id }}</td>
                                                <td>{{ $participants->nama_tim }}</td>
                                                <td>{{ $participants->logo_tim }} </td>
                                                <td>{{ $participants->no_hp }}</td>
                                                <td>{{ $participants->email }}</td>
                                                <td>{{ $participants->warna_kostum }}</td>
                                                <td>{{ $participants->jumlah_pemain }}</td>
                                                <td>{{ $participants->biaya_pendaftaran }}</td>
                                                <td>
                                                  <a href="{{ action('ParticipantController@edit', [ $events->id, $participants->id]) }} ">
                                                  <li class="fa fa-edit"></li> Edit</a></td>
                                                  <td>
                                                  <a href="# ">
                                                  <li class="fa fa-trash"></li> Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->

      <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data {{$participants->nama}} Player</h3>
                </div>
                <div class="panel-body">

                    @if ( !$members->count() )
                    <h4>Belum memiliki pemain.</h4>
                    @else

<<<<<<< HEAD
=======
          <a href="{{ action('MemberController@create', [$events->id, $participants->id]) }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
>>>>>>> 0f9f3dbc03cf55916a9ad0045ba70ed188e69714
          
                    <div class="row" style="padding-top:10px">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="success">
                                        <th>ID</th>
                                        <th>Nama Pemain</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $members as $member )
                                    <tr>
                                      <td>{{ $member->id }}</td>
                                      <td>
                                        <a href="{{ action('MemberController@show', [$events->id, $participants->id, $member->id]) }}">
                                          {{ $member->nama }}
                                      </a>
                                  </td>
                                  <td>{{ $member->created_at }}</td>
                                  <td>{{ $member->updated_at }}</td>
                                  <td>
                                    <a href="{{ action('MemberController@edit', [$events->id, $participants->id, $member->id]) }}">
                                      <i class="fa fa-edit"></i> Edit
                                  </a>
                              </td>
                              <td>
                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $participants->id }}-{{ $member->id }}">
                                  <i class="fa fa-trash"></i> Delete
                              </a>
                          </td>
                      </tr>
                      @include('admin.member.modal.delete', ['id_participant' => $participants->id, 'id_member' => $member->id])
                      @endforeach
                  </tbody>
              </table>
          </div>     
      </div>
      @endif
  </div>
</div>
</div>
</div>
</div>
</div>
</div> <!-- container -->

@endsection
