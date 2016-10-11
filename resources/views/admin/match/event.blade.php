@extends('admin.layouts.app')
@section('title', 'Data Event')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Event</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Event</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Event</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-md-11">
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
                                                <th>Nama Event</th>
                                                <th>Detail Event</th>
                                                <th>Part 1</th>
                                                <th>Part 2</th>
                                                <th>Part 3</th>
                                                <th>Part 4</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($events as $event)
                                            <tr>
                                                <td>{{ $event->id }}</td>
                                                <td><a href="{{ action('EventController@show', $event->id) }}">{{ $event->nama }}</a></td>
                                                <td>{{ $event->detail }}</td>
                                                <td>
                                                  <a href="{{ action('MatchController@index', [$event->id, 1]) }}">Check <li class="fa fa-arrow-circle-right"></li></a>
                                                </td>
                                                <td>
                                                  <a href="{{ action('MatchController@index', [$event->id, 2]) }}">Check <li class="fa fa-arrow-circle-right"></li></a>
                                                </td>
                                                <td>
                                                  <a href="{{ action('MatchController@index', [$event->id, 3]) }}">Check <li class="fa fa-arrow-circle-right"></li></a>
                                                </td>
                                                <td>
                                                  <a href="{{ action('MatchController@index', [$event->id, 4]) }}">Check <li class="fa fa-arrow-circle-right"></li></a>
                                                </td>
                                                <td>
                                                  <a href="{{ action('MatchController@autoAdd', [$event->id]) }}">Auto Add <li class="fa fa-arrow-circle-right"></li></a>
                                                </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $events->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection
