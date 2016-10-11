@extends('admin.layouts.app')
@section('title', 'Data Tag')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Tags</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Tags</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Tags</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.tag.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a href="{{ action('TagController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
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
                                              <th>Nama</th>
                                              <th>Waktu</th>
                                              <th colspan="2">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($tags as $tag)
                                          <tr>
                                              <td>{{ $tag->id }}</td>
                                              <td><a href="{{ action('TagController@show', $tag->id) }}">{{ $tag->nama }}</a></td>
                                              <td>{{ $tag->created_at }}</td>
                                              <td>
                                                <a href="{{ action('TagController@edit', $tag->id) }}">
                                                  <i class="fa fa-edit"></i> Edit
                                                </a>
                                              </td>
                                              <td>
                                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $tag->id }}">
                                                  <i class="fa fa-trash"></i> Delete
                                                </a>
                                              </td>
                                          </tr>
                                          @include('admin.tag.modal.delete', ['id' => $tag->id])
                                        @endforeach
                                      </tbody>
                                  </table>
                                  {!! $tags->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
