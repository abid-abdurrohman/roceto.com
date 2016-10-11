<main id="tournament">
 <ul class="round round-1">
<?php
    $con = mysqli_connect('localhost', 'root','','eo_sport');
    if(!$con){
      die('Could not Connect');
    }
    mysqli_select_db($con ,'eo_sport');
    $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=1";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
      $id_match = $row['id'];
      $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
        INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.id=$id_match";
      $result2 = mysqli_query($con, $sql2);
      $i[0] = "top";
      $i[1] = "bottom";
      $j = 0;
      echo "<li class='spacer'>&nbsp;</li>";
      while ($row2 = mysqli_fetch_array($result2)) {
          $id_team = $row2['id'];
          $sql3 = "SELECT match_scores.score FROM match_teams INNER JOIN match_scores ON match_teams.id=match_scores.match_team_id
            WHERE match_teams.id=$id_team";
          $result3 = mysqli_query($con, $sql3);
          $score = 0;
          while ($row3 = mysqli_fetch_array($result3)) {
             $score += $row3['score'];
          }
?>
   <li class="game game-{{ $i[$j] }}">
     <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
     <span class="input-group-addon"><span class="badge pull-right">{{ $score }}</span></span>
  </li>
<?php
      if ($j == 0) {
          echo "<li class='game game-spacer'>&nbsp;</li>";
      }
      $j++;
      }
    echo "<li class='spacer'>&nbsp;</li>";
  }
?>
 </ul>
 <ul class="round round-2">
   <?php
      $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=2";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_array($result)) {
        $id_match = $row['id'];
        $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
          INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.id=$id_match";
        $result2 = mysqli_query($con, $sql2);
        $i[0] = "top";
        $i[1] = "bottom";
        $j = 0;
        echo "<li class='spacer'>&nbsp;</li>";
        while ($row2 = mysqli_fetch_array($result2)) {
          $id_team = $row2['id'];
          $sql3 = "SELECT match_scores.score FROM match_teams INNER JOIN match_scores ON match_teams.id=match_scores.match_team_id
            WHERE match_teams.id=$id_team";
          $result3 = mysqli_query($con, $sql3);
          $score = 0;
          while ($row3 = mysqli_fetch_array($result3)) {
             $score += $row3['score'];
          }
  ?>
  <li class="game game-{{ $i[$j] }}">
    <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
    <span class="input-group-addon"><span class="badge pull-right">{{ $score }}</span></span>
 </li>
  <?php
        if ($j == 0) {
            echo "<li class='game game-spacer'>&nbsp;</li>";
        }
        $j++;
        }
    }
        echo "<li class='spacer'>&nbsp;</li>";
  ?>
 </ul>
 <ul class="round round-3">
   <?php
      $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=3";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo "<li class='spacer'>&nbsp;</li>";
        $id_match = $row['id'];
        $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
          INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.id=$id_match";
        $result2 = mysqli_query($con, $sql2);
        $i[0] = "top";
        $i[1] = "bottom";
        $j = 0;
        while ($row2 = mysqli_fetch_array($result2)) {
          $id_team = $row2['id'];
          $sql3 = "SELECT match_scores.score FROM match_teams INNER JOIN match_scores ON match_teams.id=match_scores.match_team_id
            WHERE match_teams.id=$id_team";
          $result3 = mysqli_query($con, $sql3);
          $score = 0;
          while ($row3 = mysqli_fetch_array($result3)) {
             $score += $row3['score'];
          }
  ?>
  <li class="game game-{{ $i[$j] }}">
   <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
   <span class="input-group-addon"><span class="badge pull-right">{{ $score }}</span></span>
</li>
  <?php
        if ($j == 0) {
            echo "<li class='game game-spacer'>&nbsp;</li>";
        }
        $j++;
        }
    }
        echo "<li class='spacer'>&nbsp;</li>";
  ?>
 </ul>
 <ul class="round round-4">
   <?php
      $sql = "SELECT * FROM matches WHERE matches.event_id=$event->id AND matches.no_match=4";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo "<li class='spacer'>&nbsp;</li>";
        $id_match = $row['id'];
        $sql2 = "SELECT match_teams.id, match_teams.score, participants.nama_tim FROM matches INNER JOIN match_teams ON matches.id=match_teams.match_id
          INNER JOIN participants ON participants.id=match_teams.participant_id WHERE matches.id=$id_match";
        $result2 = mysqli_query($con, $sql2);
        $i[0] = "top";
        $j = 0;
        while ($row2 = mysqli_fetch_array($result2)) {
  ?>
  <li class="game game-{{ $i[$j] }}">
     <div class="input-group"><div class="form-control">{{ $row2['nama_tim'] }}</div>
     <span class="input-group-addon"><span class="badge pull-right">{{ $row2['score'] }}</span></span>
  </li>
  <?php
        $j++;
        }
    }
        echo "<li class='spacer'>&nbsp;</li>";
  ?>
</ul>
</main>
