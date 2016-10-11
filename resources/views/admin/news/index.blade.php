@extends('admin.layouts.app')
@section('title', 'Data News')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">News</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">News</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data News</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.news.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                @include('admin.news.modal.create')
                              </div>
                              <div class="col-md-6">
                                <div id="datatable_filter" class="dataTables_filter">
                                    <label>Search:
                                      <input name=search type="search" class="form-control input-sm" placeholder="Write something" aria-controls="datatable">
                                  </label>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="table-responsive">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Waktu</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($news as $new)
                                            <tr>
                                                <td>{{ $new->id }}</td>
                                                <td><a href="{{ action('NewsController@show', $new->slug) }}">{{ $new->judul }}</a></td>
                                                <td>{{ $new->kategori }}</td>
                                                <td>{{ $new->created_at }}</td>
                                                <td>
                                                  <a href="{{ action('NewsController@edit', $new->id) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                  </a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $new->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                  </a>
                                                </td>
                                            </tr>
                                            @include('admin.news.modal.delete', ['id' => $new->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $news->links() !!}
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
@section('footer')
  <script>
    $('div.alert').not('.alert-important').delay(3000);
  </script>
@endsection
