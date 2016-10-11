@extends('admin.layouts.app')
@section('title', 'Update Match')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Update Match</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('MatchController@index', [$events->id, $id_part]) }}">Match</a></li>
                        <li class="active">{{ $matches->nama }}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media-main">
                                <center>
                                  <img class="thumb-lg img-circle" src="{!! asset('').$match_teams[0]['logo_participant'] !!}" alt="">
                                  <h4>{{ $match_teams[0]['nama_participant'] }}</h4>
                                </center>
                            </div>
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- end col -->

                <div class="col-sm-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media-main">
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                      <center>
                                        <h2>{{ $match_teams[0]['team_score'] }}</h2>
                                      </center>
                                    </div>
                                    <div class="col-md-2">
                                      <center>
                                        <h2>:</h2>
                                      </center>
                                    </div>
                                    <div class="col-md-5">
                                      <center>
                                        <h2>{{ $match_teams[1]['team_score'] }}</h2>
                                      </center>
                                    </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                    <div class="media-main">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                @if ($matches->status != 'done')
                                    <a class="btn btn-block btn-md btn-primary waves-effect waves-light" href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $id_part }}-{{ $matches->id }}">
                                      <i class="fa fa-stop"></i> Done
                                    </a>
                                    @include('admin.match_score.modal.endmatch2', ['id_part' => $id_part, 'id_match' => $matches->id])
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end col -->
                <div class="col-sm-6 col-lg-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media-main">
                                <center>
                                  <img class="thumb-lg img-circle" src="{!! asset('').$match_teams[1]['logo_participant'] !!}" alt="">
                                  <h4>{{ $match_teams[1]['nama_participant'] }}</h4>
                                </center>
                            </div>
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- end col -->
            </div> <!-- End row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                          <div class="media-main">
                              <h4>Comment : </h4>
                              {!! $match_teams[0]['team_comment'] !!}
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                          <div class="media-main">
                              <h4>Comment : </h4>
                              {!! $match_teams[1]['team_comment'] !!}
                          </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
            @if ($matches->status == 'playing')
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Team {{ $match_teams[0]['nama_participant'] }}</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::model($match_team[0], ['method' => 'PATCH', 'action' => ['EventMatchScoreController@update', $events->id, $id_part, $matches->id, $match_team[0]['id']],
                            'class'=>'form-horizontal']) !!}
                                @include('admin/match_score/form/form', ['submit_text' => 'Update Match'])
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Team {{ $match_teams[1]['nama_participant'] }}</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::model($match_team[1], ['method' => 'PATCH', 'action' => ['EventMatchScoreController@update', $events->id, $id_part, $matches->id, $match_team[1]['id']],
                            'class'=>'form-horizontal']) !!}
                                @include('admin/match_score/form/form', ['submit_text' => 'Update Match'])
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
            @endif
        </div> <!-- container -->
@endsection
@push('scripts')
<script>
  tinymce.init({
    selector: 'textarea', theme: "modern",
    plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table contextmenu directionality emoticons template paste textcolor'
    ], //The plugins configuration option allows you to enable functionality within the editor.
    toolbar: 'insertfile undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | save',
    menubar: "",
    save_enablewhendirty: true,
  });
</script>
@endpush
