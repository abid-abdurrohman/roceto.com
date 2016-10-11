<div class="col-md-3 right-column">
 <div class="top-score-title col-md-12 right-title">
  <h3>Latest News</h3>
  <?php
    $konek = mysqli_connect('localhost', 'root','','eo_sport');
    if(!$konek){
      die('Could not Connect');
    }

    mysqli_select_db($konek ,'eo_sport');
    $sql = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
    $result = mysqli_query($konek, $sql);
    while ($news = mysqli_fetch_array($result)) {
  ?>
  <div class="right-content data-news-pg">
    <p class="news-title-right"><b>{{ $news['judul'] }}</b></p>
    <p class="txt-right"> {!! str_limit($news['deskripsi'], 100) !!} </p>
    <a href="{{ action('NewsUserController@show', $news['slug']) }}" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
  </div>
  <?php } ?>
</div>
<div class="top-score-title col-md-12 right-title" style="margin-top:-40px">
  <h3>Info</h3>
  <div class="col-md-12">
    <p><i class="fa fa-phone"></i> 021 412182018 </p>
    <p><i class="fa fa-envelope-o"></i>info@roceto.com </p>
    <p><i class="fa fa-globe"></i>Mawar Raya Street no.12</p>
    <p><i class="fa fa-map-marker"></i>Depok Jawa Barat, 1234</p>
  </div>
</div>

</div>
