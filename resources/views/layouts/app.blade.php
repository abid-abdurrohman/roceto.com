<!DOCTYPE html>

<html>
<head>
  <title>Sport Event</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

  <meta name="author" content="Corsini Alessio" />
  <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,  charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
  <link href="{{ URL::asset('css/carousel.css') }}" rel="stylesheet" type="text/css" />

  <!-- Waves-effect -->
  <link href="{{ URL::asset('admin_asset/css/waves-effect.css') }}" rel="stylesheet">

  <!--javascripts collapse-->
  <script src="{{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('js/jquery.ui.totop.js') }}" type="text/javascript') }}"></script>
  <script src="{{ URL::asset('js/jquery.accordion.js') }}" type="text/javascript') }}"></script>

  <!--Video Player-->
  <link href="{{ URL::asset('css/video-js.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />

  <!-- sweet alerts -->
  {{ Html::style('admin_asset/assets/sweet-alert/sweet-alert.min.css') }}

  <!-- Examples -->
    <script src="{{ URL::asset('admin_asset/assets/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/assets/jquery-datatables-editable/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/assets/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/assets/jquery-datatables-editable/datatables.editable.init.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/tinymce/tinymce.min.js') }}"></script>

</head>
<body>

  <!--SECTION TOP LOGIN-->
  <section class="content-top-login">
   <div class="container">
    <div class="col-md-12">
     <div class="box-support">
       <p class="support-info"><i class="fa fa-envelope-o"></i> info@roceto.com</p>
     </div>
     <div class="box-login">
       @if (Auth::guest())
       <!-- <i class="fa fa-shopping-cart"></i> -->
       <a href="{{ action('LogController@login') }}">Login</a>
       <a href="{{ action('LogController@register') }}">Sign Up</a>
       @else

       <li class="dropdown">
       <a href="{{ action('ParticipantController@pembayaran') }}"><i class="fa fa-bell"></i> Bayar</a>
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
               {{ Auth::user()->name }} <span class="caret"></span>
           </a>
           <ul class="dropdown-menu" role="menu">
               <li><a href="{{ action('ProfileController@index') }}"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
               <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
           </ul>
       </li>
       @endif
     </div>
    </div>
  </div>
</section>

<!--SECTION MENU -->
<section class="container box-logo">
  <header>
    <div class="content-logo col-md-12">
      <div class="logo">
        <img src="{{ URL::asset('img/logo2.png') }}" alt="" />
      </div>
      <div class="bt-menu"><a href="#" class="menu"><span>&equiv;</span> Menu</a></div>
      <div class="box-menu">
        <nav id="cbp-hrmenu" class="cbp-hrmenu">
          <ul id="menu">
            <li><a class="lnk-menu {{ Request::segment(1) === null ? 'active' : null }}" href="{{ action('HomeController@index') }}">HOME</a>
            </li>
            <li>
              <a href="#" class="dropdown-toggle lnk-menu {{ Request::segment(1) === 'join' ? 'active' : null }}" data-toggle="dropdown"> COMPETITION <b class="caret"></b></a>
              <div class="cbp-hrsub sub-little">
                <div class="cbp-hrsub-inner">
                  <div class="content-sub-menu">
                    <ul class="menu-pages">
                      @include('../composers.event_menu', $events)
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a href="#" class="dropdown-toggle lnk-menu {{ (Request::segment(1) === 'schedule')||(Request::segment(1) === 'bracket')||(Request::segment(1) === 'results')||(Request::segment(1) === 'fixtures')||(Request::segment(1) === 'tables') ? 'active' : null }}" data-toggle="dropdown"> EVENTS <b class="caret"></b></a>
              <div class="cbp-hrsub sub-little">
                <div class="cbp-hrsub-inner">
                  <div class="content-sub-menu">
                    <ul class="menu-pages">
                      <li><a href="{{ action('ScheduleUserController@index') }}"><span>Schedule</span></a></li>
                      <li><a href="{{ action('BracketUserController@index') }}"><span>Bracket</span></a></li>
                      <li><a href="{{ action('ResultUserController@index') }}"><span>Results</span></a></li>
                      <li><a href="{{ action('FixturesUserController@index') }}"><span>Fixtures</span></a></li>
                      <li><a href="{{ action('TableUserController@show',1) }}"><span>Tables</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li><a class="lnk-menu {{ Request::segment(1) === 'gallery' ? 'active' : null }}" href="{{ action('GalleryUserController@index') }}"> Gallery </a></li>
            <li><a class="lnk-menu {{ Request::segment(1) === 'news' ? 'active' : null }}" href="{{ action('NewsUserController@index') }}"> NEWS </a></li>
            <li><a class="lnk-menu {{ Request::segment(1) === 'contact' ? 'active' : null }}" href="{{ url('/contact') }}">CONTACT</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
 </header>
</section>



@yield('content')

<!--SECTION FOOTER-->
<section id="footer-tag">
 <div class="container">
   <div class="col-md-12">
    <div class="col-md-3">
     <h3>About Us</h3>
     <p>Thank you for visiting roceto.com. Our mission is to
       provide unrivalled and unbiased informative and resources to help any sports fan who enjoys a flutter make informed and value led decisions.</p>
       <p>Roceto will help you to organize and facilitate your event sport. Include Registration, Join Competition, Payment, and Enjoy the competition </p>
       </div>
       <?php ?>

       <div class="col-md-3 cat-footer">
        <div class="footer-map"></div>
        <h3 class='last-cat'>Competition</h3>
        <ul class="last-tips">
        @foreach ($events as $event)
          <li>{{ $event->nama }}</li>
        @endforeach
        </ul>
      </div>

    <div class="col-md-3">
       <h3>Last News</h3>
       @foreach ($news as $news)
         <ul class="footer-last-news">
            <li>
              <a href="{{ action('NewsUserController@show', $news->slug) }}">
              <img src="{!! asset('').$news->thumbnail !!}" alt="" /></a>
              <p>{!! str_limit($news->deskripsi, 85) !!}</p>
            </li>
         </ul>
       @endforeach
    </div>
    <div class="col-md-3 footer-newsletters">
      <h3>Newsletters</h3>
      <form method="post">
        <div class="name">
          <label for="name">* Name:</label><div class="clear"></div>
          <input id="name" name="name" type="text" placeholder="e.g. Mr. John Doe" required=""/>
        </div>
        <div class="email">
          <label for="email">* Email:</label><div class="clear"></div>
          <input id="email" name="email" type="text" placeholder="example@domain.com" required=""/>
        </div>
        <div id="loader">
          <input type="submit" value="Submit"/>
        </div>
      </form>
    </div>
    <div class="col-xs-12">
      <ul class="social">
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        {{-- <li><a href=""><i class="fa fa-linkedin"></i></a></li>
        <li><a href=""><i class="fa fa-digg"></i></a></li>
        <li><a href=""><i class="fa fa-rss"></i></a></li> --}}
        <li><a href=""><i class="fa fa-youtube"></i></a></li>
        <li><a href=""><i class="fa fa-tumblr"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</section>

<footer>
 <div class="col-md-12 content-footer">
  <p>© 2016 - 2017 roceto.com. All rights reserved. </p>
</div>
</footer>

<script src="{{ URL::asset('js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.transit.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/dropzone.min.js') }}" type="text/javascript"></script>



<!-- jQuery  -->
<script src="{{ URL::asset('admin_asset/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('admin_asset/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('admin_asset/js/waves.js') }}"></script>

<!---->
<!--MENU-->
<script src="{{ URL::asset('js/menu/modernizr.custom.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/menu/cbpHorizontalMenu.js') }}" type="text/javascript"></script>
<!--END MENU-->
<!-- 
<script src="{{ URL::asset('js/crousel.js') }}" type="text/javascript"></script> -->

<!--Mini Flexslide-->
<script src="{{ URL::asset('js/minislide/jquery.flexslider.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/minislide/form_wizard.js') }}" type="text/javascript"></script>

<!-- Percentace circolar -->
<script src="{{ URL::asset('js/circle/jquery-asPieProgress.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/circle/rainbow.min.js') }}" type="text/javascript"></script>

<!--Gallery-->
<script src="{{ URL::asset('js/gallery/jquery.prettyPhoto.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/gallery/isotope.js') }}" type="text/javascript"></script>

<!-- Button Anchor Top-->
<script src="{{ URL::asset('js/jquery.ui.totop.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.bxslider.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.accordion.js') }}" type="text/javascript"></script>

<!--Calender-->
<script src="{{ URL::asset('js/jquery.calender.js') }}" type="text/javascript"></script>

<!--Carousel News-->
<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.mousewheel.js') }}" type="text/javascript"></script>

<!--Carousel Clients-->
<script src="{{ URL::asset('js/own/owl.carousel.js') }}" type="text/javascript"></script>

<!--Count down-->
<script src="{{ URL::asset('js/jquery.countdown.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('js/custom_ini.js') }}" type="text/javascript"></script>
@stack('scripts')
</body>
</html>
