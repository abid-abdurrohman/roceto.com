@extends('admin.layouts.app')
@section('title', 'Data User')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Users</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Users</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Users</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.user.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                @include('admin.user.modal.create')
                                <!-- <a href="{{ action('UserAdminController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a> -->
                              </div>
                              <div class="col-md-6">
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="table-responsive">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <table id="datatable" class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>Nama User</th>
                                              <th>Nickname</th>
                                              <th>Email</th>
                                              <th>Avatar</th>
                                              <th>Waktu</th>
                                              <th colspan="2">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($users as $user)
                                          <tr>
                                              <td>{{ $user->id }}</td>
                                              <td><a href="{{ action('UserAdminController@show', $user->id) }}">{{ $user->name }}</a></td>
                                              <td>{{ $user->nick_name }}</td>
                                              <td>{{ $user->email }}</td>
                                              <td><a href="{!! asset('').'/'.$user->avatar !!}" class="image-popup" title="{{ $user->avatar }}"> {{ $user->avatar }} </td> 
                                              <td>{{ $user->created_at }}</td>
                                              <td>
                                                <a href="{{ action('UserAdminController@edit', $user->id) }}">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $user->id }}">
                                                  <i class="fa fa-trash"></i> Delete
                                                </a>
                                              </td>
                                          </tr>
                                          @include('admin.user.modal.delete', ['id' => $user->id])
                                        @endforeach
                                      </tbody>
                                  </table>
                                  {!! $users->links() !!}
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
