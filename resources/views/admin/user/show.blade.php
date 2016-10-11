@extends('admin.layouts.app')
@section('title', 'Detail User')
@section('content')

<!--venobox lightbox-->
        <link rel="stylesheet" href="assets/magnific-popup/magnific-popup.css"/>

        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">User</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('UserAdminController@index') }}">User</a></li>
                        <li class="active">{{$user->name}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$user->name}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="table-responsive">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">                           
                                            <div class="user-wrapper-responsive">
                                                <a style="border:2px" class="image-popup" href="{!! asset('').$user->avatar !!}" title="{{ $user->nama }}">
                                                <img src="{!! asset('').$user->avatar !!}" width="180 px" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                          <div class="table table-responsive">                              
                                            <table class="table table-hover">
                                                <tr>
                                                    <td style="width:140px">ID</td>
                                                    <td style="width:5px">:</td>
                                                    <td>{{ $user->id }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>:</td>
                                                    <td>{{ $user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nick Name</td>
                                                    <td>:</td>
                                                    <td>{{ $user->nick_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>E-mail</td>
                                                    <td>:</td>
                                                    <td>{{ $user->email }}</td>
                                                </tr> 
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>:</td>
                                                    <td>{{ $user->mobile}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Created at</td>
                                                    <td>:</td>
                                                    <td>{{ $user->created_at }}</td>
                                                </tr>
                                            </table>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div> <!-- End Row -->

        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Event</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="table-responsive">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Competition</th>
                                                <th>Single or Team</th>
                                                <th>No. Hp</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                        <?php $no=1 ?>
                                        @foreach ($participants as $participant)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $participant->nama_event }}</td>
                                                <td><a href="{{ action('ParticipantController@show', [$participant->event_id, $participant->id]) }}"> {{ $participant->nama_tim}}</a></td>
                                                <td>{{ $participant->no_hp}}</td>
                                                @if ($participant->status == "validated")
                                                <td><span class="label label-success">{{ $participant->status }}</span>
                                                </td>
                                                <!-- <td><a href="{{ action('ParticipantController@show', [$participant->event_id, $participant->id]) }}"><center> Check team  <i class="fa fa-angle-double-right"></i></center></a></td> -->
                                                @else
                                                <td style="width:5px"><span class="label label-warning">{{ $participant->status }}</span>
                                                </td>
                                                <!-- <td><a href="{{ action('ParticipantController@event_index') }}"><center> Check Payment  <i class="fa fa-angle-double-right"></i></center></a></td> -->
                                                @endif 
                                        @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Row -->

        </div> <!-- container -->
@endsection

@push('script')
<script type="text/javascript" src="assets/gallery/isotope.js"></script>
        <script type="text/javascript" src="assets/magnific-popup/magnific-popup.js"></script> 
          
        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                }); 
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>
@endpush
