@extends('admin.layouts.app')
@section('title', 'Data Rank')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Ranks</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Ranks</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Ranks</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.rank.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                @include('admin.rank.modal.create')
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
                                              <th>Title</th>
                                              <th>Daskripsi</th>
                                              <th>Point</th>
                                              <th>Waktu</th>
                                              <th colspan="2">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($ranks as $rank)
                                          <tr>
                                              <td>{{ $rank->id }}</td>
                                              <td><a href="{{ action('RankController@show', [$rank->id]) }}">{{ $rank->title }}</a></td>
                                              <td>{{ $rank->deskripsi }}</td>
                                              <td>{{ $rank->point }}</td>
                                              <td>{{ $rank->created_at }}</td>
                                              <td>
                                                <a href="{{ action('RankController@edit', [$rank->id]) }}">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $rank->id }}">
                                                  <i class="fa fa-trash"></i> Delete
                                                </a>
                                              </td>
                                          </tr>
                                          @include('admin.rank.modal.delete', ['id' => $rank->id])
                                        @endforeach
                                      </tbody>
                                  </table>
                                  {!! $ranks->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
