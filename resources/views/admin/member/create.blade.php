@extends('admin.layouts.app')
@section('title', 'Create Data Member')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Member</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('ParticipantController@show', [$events->id, $participant->id]) }}">Member</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Create Player</h3></div>
                        <div class="panel-body">
                            {!! Form::open(array('class' => 'form-horizontal', 'files'=>true, 'method' => 'POST', 'action' => array('MemberController@store', $events->id,
                            $participant->id))) !!}
                                @include('admin.member.form.form', ['submit_text' => 'Add Member'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
