@extends('admin.layouts.app')
@section('title', 'Edit Data Member')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Member</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('ParticipantController@show', [$events->id, $participant->id]) }}">Member</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit {{ $member->nama }}</h3></div>
                        <div class="panel-body">
                            {!! Form::model($member, ['method' => 'PATCH', 'files'=>true, 'action' => ['MemberController@update', $events->id, $participant->id, $member->id],'class' => 'form-horizontal']) !!}
                                @include('admin/member/form/form', ['submit_text' => 'Edit Participant'])
                            {!! Form::close() !!}
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->
            </div> <!-- End row -->
        </div> <!-- container -->
@endsection
