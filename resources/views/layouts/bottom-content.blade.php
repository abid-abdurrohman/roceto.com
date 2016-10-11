<!--SECTION SPONSOR-->
{{-- <section class="container">
   <div class="client-sport client-sport-nomargin home-pg">
       <div class="content-banner">
             <ul class="sponsor second">
              @foreach ($sponsors as $sponsor)
                <li>
                  <a href="http://{!! $sponsor->website_pt !!}" target="_blank">
                    <img src="{!! asset('').$sponsor->foto_pt !!}" alt="" />
                  </a>
                </li>
              @endforeach
            </ul>
        </div>
  </div>
</section> --}}
<section class="container">
   <div class="client-sport client-sport-nomargin home-pg">
       <div class="content-banner">
             <ul class="sponsor second">
              <?php
                  $con = mysqli_connect('localhost', 'root','','eo_sport');
                  if(!$con){
                    die('Could not Connect');
                  }
                  mysqli_select_db($con ,'eo_sport');
                  $sql = "SELECT * FROM sponsors ORDER BY created_at DESC LIMIT 6";
                  $result = mysqli_query($con, $sql);
                  while ($sponsor = mysqli_fetch_array($result)) {
              ?>
                  <li>
                    <a href="http://{!! $sponsor['website_pt'] !!}" target="_blank">
                      <img src="{!! asset('').$sponsor['foto_pt'] !!}" alt="" />
                    </a>
                  </li>
              <?php
                  }
              ?>
            </ul>
        </div>
  </div>
</section>
