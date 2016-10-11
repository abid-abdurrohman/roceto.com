@extends('layouts.app')
@section('content')

<style type="text/css">
  .text-slider {
  margin-bottom: 30px;
}
.flex_text ul {
  padding-left: 0;
}
.flex_text li {
  text-align: center;
  font-size: 30px;
  font-weight: 700;
  color: #fff;
  min-height: 40px;
  line-height: 40px;
  margin-bottom: 0;
}
</style>

<!--SECTION CONTAINER SLIDER-->
    <section id="summary-slider">
           <div class="general">
           <div class="content-result content-result-news col-md-12">
             <div id="textslide" class="effect-backcolor">
                <div class="container">
                    <div class="col-md-12 slide-txt">
                        <p class='sub-result aft-little welcome linetheme-left txt-advert animated'>Welcome</p>
                    </div>
                </div>
             </div>
           </div>
           <div id="slidematch" class="col-xs-12 col-md-12">
              <div class="content-match-team-wrapper">
                 <span class="gdlr-left">Real Tennis</span>
                 <span class="gdlr-upcoming-match-versus">VS</span>
                 <span class="gdlr-right">Wednesday Club</span>
              </div>
              <div class="content-match-team-time">
                 <span class="gdlr-left">23 Sep 2016 - 14:00</span>
                 <span class="gdlr-right">Real Stadium</span>
              </div>
           </div>
         </div>
    </section>

    <!-- SECTION NEWS SLIDER -->
     <section class="news_slide-over-color">
          <div class="news_slide-over"></div>
           <div class="container">
             <div class="col-xs-12 col-md-12 top-slide-info">
             @foreach ($news as $news)
               <div class="col-xs-6 col-md-6" style="margin-bottom:20px">
                 <div class="col-md-4 slide-cont-img"><a href="{{ action('NewsUserController@show',$news->slug) }}">
                   <img class="scale_image" src="{!! asset('').$news->thumbnail !!}" alt=""/></a>
                 </div>
                 <div class="event_date dd-date">{!! $news->created_at !!}
                   <div class="post_theme">Exlusive</div>
                 </div><h4> {{ $news->judul }}</h4>
                 <p>{!! str_limit($news->deskripsi, 350) !!}</p>
               </div>
             @endforeach
            </div>
           </div>
     </section>

     <section id="parallaxTraining">
        <div class="black-shad">
        <div class="container">
            <div class="col-md-12">
                <div class="txt-training">
                  <p>JOIN IN </p>
                  <h2>COMPETITION</h2>
                  @foreach ($events as $event)
                    <div class="col-md-3" style="padding:20px">
                      <a class="btn btn-danger" href="{{ action('RegisterController@index', $event->id) }}">
                        {{ $event->nama }}
                      </a>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
      </div>
     </section>
     <!--SECTION Match TOP SCORE-->

     <section id="atp-match">
        <div class="container">
           @if ($last_match_teams != null)
             <div id="people-top" class="top-match col-xs-12 col-md-12">
                <h3 class="news-title n-match">Last <span>Match</span><span class="point-little">.</span></h3>
                <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands
                                      that a normal humans can understand.</p>
              <!--SECTION ATP MATCH-->
                <div class="next-match-co col-xs-12 col-md-12">
                   <div id="nextmatch-content" class="experience">

                     <div class="col-xs-12 atphead"><div class="match-sing-title"><img src="images/sub-ball.png" alt="" />ATP.HEAD2</div></div>
                     <div class="col-xs-4 pht-1 pht-left">
                         <div class="img-face-home">
                            <img src="{!! asset('').$last_match_teams[0]['logo_participant'] !!}" alt="" />
                            <p class="name-mc">{{ $last_match_teams[0]['nama_participant'] }}</p>
                         </div>
                    </div>
                    <div class="col-xs-4 pl-point ">
                        <p class="col-xs-12 name-mc-title"></p>
                        <p class="col-xs-12 name-mc-title"></p>
                        <div class="col-xs-4 nm-result">
                              <p class="nr1 ris1"> {{ $last_match_teams[0]['team_score'] }} </p>
                              <p class="nr2"></p>
                        </div>
                        <div class="col-xs-4 nm-result-vs">
                              <p class="nrvs"> - VS - </p>
                        </div>
                        <div class="col-xs-4 nm-result">
                              <p class="nr1 ris2"> {{ $last_match_teams[1]['team_score'] }} </p>
                              <p class="nr2"></p>
                        </div>
                    </div>
                     <div class="col-xs-4 pht-1 pht-right">
                          <div class="img-face-home">
                              <img src="{!! asset('').$last_match_teams[1]['logo_participant'] !!}" alt="" />
                              <p class="name-mc">{{ $last_match_teams[1]['nama_participant'] }}</p>
                          </div>
                    </div>
                    <div class="col-xs-12 atphead">
                        <div class="match-sing-title inf-bottom">
                          <p><i class="fa fa-calendar-o"></i>{{ $last_match_teams[1]['waktu'] }} <i class="fa fa-map-marker"></i> {{ $last_match_teams[1]['tempat'] }}</p>
                        </div>
                        <!-- <div class="score-view-all"><a class="pl-point-button" href="{{ url('/results')}}">View All SCORE</a></div> -->
                    </div>
                   </div>
                </div>
               </div><!--Close Top Match-->
           @endif
         </div>
     </section>

 <!--SECTION NEXT MATCH-->
     <section id="next-match">
           <div  class="container">
              <div class="next-match-news top-match col-xs-12 col-md-12">
              <h3 class="news-title n-match">Next <span>Match</span><span class="point-little">.</span></h3>
              <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands
                                    that a normal humans can understand.</p>
                <div class="other-match col-md-6">
                    <div class="score-next-time">
                        <div class="circle-ico"><p>ATP</p></div>
                    </div>
                    <div id="getting-started"></div>
                      <?php
                        $con = mysqli_connect('localhost', 'root','','eo_sport');
                        if(!$con){
                          die('Could not Connect');
                        }

                        mysqli_select_db($con ,'eo_sport');
                        $sql = "SELECT * FROM matches WHERE status='available' ORDER BY waktu DESC LIMIT 1";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            $id_match = $row['id'];
                            $sql2 = "SELECT participants.nama_tim as nama_participant, participants.logo_tim as logo_participant,
                            match_teams.score as team_score, match_teams.comment as team_comment, matches.* FROM match_teams INNER JOIN
                            matches ON matches.id = match_teams.match_id INNER JOIN participants ON participants.id = match_teams.participant_id
                            WHERE match_teams.match_id = $id_match AND matches.status = 'available' ORDER BY matches.waktu DESC LIMIT 2";
                            $result2 = mysqli_query($con, $sql2);
                            $i = 0;
                            while( $row2 = mysqli_fetch_assoc( $result2)){
                                $match_teams[$i] = $row2; // Inside while loop
                                $row2['nama_participant'];
                                $i++;
                            }
                            if (mysqli_num_rows($result2)!=0) {
                    ?>
                    <div class="col-xs-5 col-md-5 match-team">
                        <img style="width:80px" src="{!! asset('').$match_teams[0]['logo_participant'] !!}" alt=""/>
                        <p>{{ $match_teams[0]['nama_participant'] }}</p>
                    </div>
                    <div class="col-xs-2 col-md-2 match-team-vs">
                        <span class="txt-vs"> - vs - </span>
                    </div>
                    <div class="col-xs-5 col-md-5 match-team">
                        <img style="width:80px" src="{!! asset('').$match_teams[1]['logo_participant'] !!}" alt=""/>
                        <p>{{ $match_teams[1]['nama_participant'] }}</p>
                    </div>
                    <div class="next-match-place">
                        <p class='sub-result'>{{ $row['tempat'] }}</p>
                        <p class="dd-news-date">{{ $row['waktu'] }}</p>
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
                <div class="other-match col-md-6">
                    <?php
                        $sql = "SELECT * FROM matches WHERE status='available' ORDER BY waktu DESC LIMIT 3";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            $id_match = $row['id'];
                            $sql2 = "SELECT participants.nama_tim as nama_participant, participants.logo_tim as logo_participant,
                            match_teams.score as team_score, match_teams.comment as team_comment, matches.* FROM match_teams INNER JOIN
                            matches ON matches.id = match_teams.match_id INNER JOIN participants ON participants.id = match_teams.participant_id
                            WHERE match_teams.match_id = $id_match AND matches.status = 'available' ORDER BY matches.waktu DESC LIMIT 2";
                            $result2 = mysqli_query($con, $sql2);
                            $i = 0;
                            while( $row2 = mysqli_fetch_assoc( $result2)){
                                $match_teams[$i] = $row2; // Inside while loop
                                $i++;
                            }
                            if (mysqli_num_rows($result2)!=0) {
                    ?>
                    <div class="match-team-list">
                        <img style="width:50px" class="t-img1" src="{!! asset('').$match_teams[0]['logo_participant'] !!}" alt=""/>
                        <span>{{ $match_teams[0]['nama_participant'] }}</span>
                        <span class="txt-vs"> - vs - </span>
                        <span>{{ $match_teams[1]['nama_participant'] }}</span>
                        <img style="width:50px" class="t-img2" src="{!! asset('').$match_teams[1]['logo_participant'] !!}" alt=""/>
                        <p>{{ $row['waktu'] }}</p>
                    </div>
                    <?php
                          }
                      }
                    ?>
                    <a href="{{ action('FixturesUserController@index') }}">
                    <div class="team-view-all">
                       <p>View all</p>
                    </div>
                    </a>
                </div>
            </div>
           </div>
     </section>
<!--SECTION Quota RESULTS-->
     <section id="resultsPoint">
           <div class="container">
                    <div class="top-match col-xs-12 col-md-12">
                     <div class="top-score-title">
                        <h3>Quota<span class="point-little">.</span></h3>
                        <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands
                                    that a normal humans can understand.</p>
                        <div class="col-md-12 circle-percentage">
                          <?php
                              $sql = "SELECT * FROM events";
                              $result = mysqli_query($con, $sql);
                              while ($row = mysqli_fetch_array($result)) {
                                $id_event = $row['id'];
                                $sql2 = "SELECT * FROM participants WHERE event_id = '$id_event' AND status = 'validated'";
                                $result2 = mysqli_query($con, $sql2);
                                $count = mysqli_num_rows($result2);
                                $kuota = ($count*100)/($row['kuota']+0.000001);
                          ?>
                          <div class="col-md-3" style="padding:20px">
                            <div class="pie_progress" role="progressbar" data-goal="{{ $kuota }}" data-barcolor="#f59123" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">{{ $kuota }}%</div>
                                <div class="pie_progress__content">{{ $row['nama'] }}</div>
                             </div>
                            </div>
                          </div>
                          <?php
                              }
                          ?>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                </div>
     </section>

@include('layouts.bottom-content', $sponsors)

@endsection
@push('scripts')

<script>
    $(document).ready(function() {
      if (window.location.hash == '#_=_') {
          window.location.hash = ''; // for older browsers, leaves a # behind
          history.pushState('', document.title, window.location.pathname); // nice and clean
          e.preventDefault(); // no page reload
      }
    });
</script>
@endpush
