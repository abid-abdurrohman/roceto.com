@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best Nikol Radek</h3>
      <p class="txt-advert-sub">Lifelong dream of becoming the No. 1 player on the ATP World Tour </p>
    </div>
  </div>

  <section id="summary" class="container secondary-page">
    <div class="general general-results">
      <div class="top-score-title player-vs">
       <h3>Next <span>Match</span><span class="point-little">.</span></h3>
        <div class="main">
          <div class="tabs standard">
            <div class="col-md-12 player-photo">
              <table class="table">
                <?php
                    $con = mysqli_connect('localhost', 'root','','eo_sport');
                    if(!$con){
                      die('Could not Connect');
                    }
                    mysqli_select_db($con ,'eo_sport');
                    $sql = "SELECT * FROM matches WHERE status='available' ORDER BY waktu DESC";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        $id_match = $row['id'];
                        $sql2 = "SELECT participants.nama_tim as nama_participant, participants.logo_tim as logo_participant,
                        match_teams.score as team_score, match_teams.comment as team_comment, matches.* FROM match_teams INNER JOIN
                        matches ON matches.id = match_teams.match_id INNER JOIN participants ON participants.id = match_teams.participant_id
                        WHERE match_teams.match_id = $id_match AND matches.status = 'available' ORDER BY matches.waktu DESC LIMIT 2";
                        $result2 = mysqli_query($con, $sql2);
                        $count = mysqli_num_rows($result2);
                        if ($count == 2) {
                          $i = 0;
                          while( $row2 = mysqli_fetch_assoc( $result2)){
                              $match_teams[$i] = $row2; // Inside while loop
                              $i++;
                          }
                          ?>
                      <tr>
                        <td>{{ $row['waktu'] }}</td>
                        <td><i class="fa fa-map-marker"></i> {{ $row['tempat'] }}</td>
                        <td>{{ $match_teams[0]['nama_participant'] }}</td>
                        <td><img src="{!! asset('').$match_teams[0]['logo_participant'] !!}" style="width:20px" alt="" /></td>
                        <td></td>
                        <td> - </td>
                        <td></td>
                        <td><img src="{!! asset('').$match_teams[1]['logo_participant'] !!}" style="width:20px" alt="" /></td>
                        <td>{{ $match_teams[1]['nama_participant'] }}</td>
                        <td>
                          <a href="{{ action('EventStreamController@show', $id_match) }}">
                            <i class="fa fa-chevron-right"></i>
                          </a>
                        </td>
                      </tr>
                  <?php
                        }
                    }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@include('layouts.bottom-content')
</section>
@endsection
