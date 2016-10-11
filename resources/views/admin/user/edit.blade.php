@extends('admin.layouts.app')
@section('title', 'Edit Data User')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Users</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('UserAdminController@index') }}">Users</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $users->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($users, ['method' => 'PATCH', 'files' => true, 'action' => ['UserAdminController@update', $users->id],
                            'class'=>'form-horizontal']) !!}
                                @include('admin/user/form/form', ['submit_text' => 'Edit User'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
