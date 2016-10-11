@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('socialsharekit/css/social-share-kit.css?v=1.0.10') }}">
   <section class="drawer">
    <div class="col-md-12 size-img back-img-video">
        <div class="effect-cover">
                <div class="banner_cont animated">
                  <!-- <img src="{{ URL::asset('images/atp_img.png') }}" alt="" /> -->
                  <h3 class="txt-advert">UNCOVERED</h3>
                </div>
            <p class="txt-advert-sub">Now in its fifth season, ATP World Tour Uncovered.</p>
        </div>
    </div>



     <section id="parallaxTraining">

     </section>

      <!--SECTION Match TOP SCORE-->


    <section id="video" class="container secondary-page">
      <div class="general general-results">
          <!-- Page-Title -->
           <div class="top-score-title col-md-9">
             <h3>{{ $match_teams[0]['nama_participant'] }}<span> VS </span>{{ $match_teams[1]['nama_participant'] }}</h3>
             <div id="people-top" class="top-match col-xs-12 col-md-12">

              <!--SECTION ATP MATCH-->
                <div class="next-match-co col-xs-12 col-md-12">
                   <div id="nextmatch-content" class="experience">
                     <div class="col-xs-12 atphead"></div>
                     <div class="col-xs-4 pht-1 pht-left">
                         <div class="img-face-home">
                            <img src="{!! asset('').$match_teams[0]['logo_participant'] !!}" alt="" />
                            <p class="name-mc">{{ $match_teams[0]['nama_participant'] }}</p>
                         </div>
                    </div>
                    <div class="col-xs-4 pl-point ">
                        <p class="col-xs-12 name-mc-title">BEIJING - FIRST ROUND</p>
                        <div class="col-xs-4 nm-result">
                              <p class="nr1 ris1"> {{ $match_teams[0]['team_score'] }}</p>
                              <p class="nr2"> 0% </p>
                        </div>
                        <div class="col-xs-4 nm-result-vs">
                              <p class="nrvs"> - VS - </p>
                        </div>
                        <div class="col-xs-4 nm-result">
                              <p class="nr1 ris2"> {{ $match_teams[1]['team_score'] }} </p>
                              <p class="nr2"> 100% </p>
                        </div>
                    </div>
                     <div class="col-xs-4 pht-1 pht-right">
                          <div class="img-face-home">
                              <img src="{!! asset('').$match_teams[1]['logo_participant'] !!}" alt="" />
                              <p class="name-mc">{{ $match_teams[1]['nama_participant'] }}</p>
                          </div>
                    </div>
                   </div>
                </div>
                <div style="color:white">
                   <div id="nextmatch-content">
                     <div class="col-md-6  pht-left" >
                        <p>{!! $match_teams[0]['team_comment'] !!}</p>
                    </div>
                    <div class="col-md-6  pht-right">
                        <p>{!! $match_teams[1]['team_comment'] !!}</p>
                    </div>
                  </div>
                </div>
              </div><!--Close Top Match-->

             <hr>
                <h3>Streaming <span>Now </span><span class="point-little">!</span></h3>
                <div class="col-md-12 news-video">
                   <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="100%" height="395"> </video>
                </div>
                <div class="row">
                    <div class="col-md-12 news-video">
                        <div class="video-desc">
                            <h3 class="video-tit"><span>{{ $matches->waktu }} </span>{{ $matches->nama }}</h3>
                            <p class="video-arg">
                               {!! $matches->deskripsi !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="top-score-title col-md-12">
                    <div class="col-md-3 col-md-offset-9">
                      <h4>Share with :</h4>
                      @include('bracket.include.share', [
                          'url' => request()->fullUrl(),
                          'description' => $matches->nama.' Video Streaming',
                          'image' => asset('').'/'.$matches->nama
                      ])
                    </div>
                  </div>
                </div>
                <div class="video-desc">
                    <h3 class="video-other-old">Other <span>Video</span><span class="point-little">.</span></h3>
                    <div class="col-md-4 other-videotitle">
                        <p class="othervideo-date">04.09.2014</p>
                        <p>Emr ATP Rankings</p>
                    </div>
                    <div class="col-md-4 other-videotitle">
                        <p class="othervideo-date">12.02.2014</p>
                        <p>ATP CONFERENCE</p>
                    </div>
                    <div class="col-md-4 other-videotitle otv-last">
                        <p class="othervideo-date">05.11.2014</p>
                        <p>US Open 2014</p>
                    </div>
                    <div class="col-md-4 other-video">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="col-md-4 other-video">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="col-md-4 other-video otv-last">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                </div>

                <div class="video-content">
                    <div class="col-md-4 other-videotitle">
                        <p class="othervideo-date">04.09.2014</p>
                        <p>Emr ATP Rankings</p>
                    </div>
                    <div class="col-md-4 other-videotitle">
                        <p class="othervideo-date">12.02.2014</p>
                        <p>ATP CONFERENCE</p>
                    </div>
                    <div class="col-md-4 other-videotitle otv-last">
                        <p class="othervideo-date">05.11.2014</p>
                        <p>US Open 2014</p>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-4 other-video">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="col-md-4 other-video">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="col-md-4 other-video otv-last">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                </div>
                @include('layouts.bottom-content')
           </div><!--Close Top Match-->

        <!-- Right Column-->

           @include('layouts.right-content')
        </section>
@endsection
@push('scripts')
<!--Video Tube-->
<script type="text/javascript" src="{{ URL::asset('js/video.js') }}"></script>
<script src="{{ URL::asset('js/youtube/youtube.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/youtube/videojs.youtubeVideowall.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        "use strict";
        videojs('example_video_1', { 'techOrder': ['youtube'], 'src': '{{ $matches->youtube }}' }, function () {
            this.youtubeVideowall();
        });
    });
    </script>
    <script>
        var popupSize = {
            width: 780,
            height: 550
        };
        $(document).on('click', '.social-buttons > a', function(e){
            var
                verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
                horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);
            var popup = window.open($(this).prop('href'), 'social',
                'width='+popupSize.width+',height='+popupSize.height+
                ',left='+verticalPos+',top='+horisontalPos+
                ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');
            if (popup) {
                popup.focus();
                e.preventDefault();
            }
        });
    </script>
@endpush
