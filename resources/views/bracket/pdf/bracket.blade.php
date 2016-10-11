<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('css/online/open_sans.css') }}" rel='stylesheet' type='text/css'/>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->
    <link href="{{ URL::asset('css/online/raleway.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ URL::asset('css/online/oswald.css') }}" rel='stylesheet' type='text/css'>

    <link href="{{ URL::asset('css/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Clients-->
    <link href="{{ URL::asset('css/own/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/own/owl.theme.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/jquery.jscrollpane.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('css/minislide/flexslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/minislide/form_wizard.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/component.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/dropzone.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/bracket.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/style_dir.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('img/favicon.ico') }}" />
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/submenu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/profil.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/comments.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/calender.css') }}" rel="stylesheet" type="text/css" />

    <!-- Waves-effect -->
    <link href="{{ URL::asset('admin_asset/css/waves-effect.css') }}" rel="stylesheet">

    <!--javascripts collapse-->
    <script src="{{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/jquery.ui.totop.js') }}" type="text/javascript') }}"></script>
    <script src="{{ URL::asset('js/jquery.accordion.js') }}" type="text/javascript') }}"></script>

    <!--Video Player-->
    <link href="{{ URL::asset('css/video-js.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <main id="tournament">
     <ul class="round round-1">
    <?php
        $con = mysqli_connect('localhost', 'root','','eo_sport');
        if(!$con){
          die('Could not Connect');
        }
        mysqli_select_db($con ,'eo_sport');
        $sql = "SELECT * FROM matches WHERE matches.event_id=$events->id AND matches.no_match=1";
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
          $sql = "SELECT * FROM matches WHERE matches.event_id=$events->id AND matches.no_match=2";
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
          $sql = "SELECT * FROM matches WHERE matches.event_id=$events->id AND matches.no_match=3";
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
          $sql = "SELECT * FROM matches WHERE matches.event_id=$events->id AND matches.no_match=4";
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
  </body>
</html>
