@extends('admin.layouts.app')
@section('title', 'Role User')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Role Users</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Role Users</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Role Users</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.user.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                @include('admin.user.modal.create')
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
                                              <th>Nama User</th>
                                              <th>Email</th>
                                              <th>User</th>
                                              <th>Author</th>
                                              <th>Admin</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($users as $user)
                                          {!! Form::open(['action' => 'RoleUserController@store',  'class'=>'form-horizontal']) !!}
                                          <tr>
                                              <td>{{ $user->id }}</td>
                                              <td><a href="{{ action('UserAdminController@show', $user->id) }}">{{ $user->name }}</a></td>
                                              <td>
                                                {{ $user->email }}
                                                <input type="hidden" name="email" value="{{ $user->email }}">
                                              </td>
                                              <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                                              <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>
                                              <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                                              <td>
                                                <button class="btn btn-default" type="submit">
                                                  Submit
                                                </button>
                                              </td>
                                          </tr>
                                          {!! Form::close() !!}
                                        @endforeach
                                      </tbody>
                                  </table>
                                  {!! $users->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
