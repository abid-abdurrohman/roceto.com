<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ URL::asset('admin_asset/images/favicon_1.ico') }}">

        <title>@yield('title')</title>

        <!-- Base Css Files -->
        {{ Html::style('admin_asset/css/bootstrap.min.css') }}

        <!-- all skins -->
        {{ Html::style('admin_asset/dist/css/skins/_all-skins.min.css') }}

        <!-- Font Icons -->
        {{ Html::style('admin_asset/assets/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('admin_asset/assets/ionicon/css/ionicons.min.css') }}
        {{ Html::style('admin_asset/css/material-design-iconic-font.min.css') }}

        <!-- animate css -->
        {{ Html::style('admin_asset/css/animate.css') }}

        <!-- Waves-effect -->
        {{ Html::style('admin_asset/css/waves-effect.css') }}

        <!--calendar css-->
        {{ Html::style('admin_asset/assets/fullcalendar/fullcalendar.css') }}

        <!-- Select2 -->
        {{ Html::style('admin_asset/assets/select2/select2.css') }}

        <!-- sweet alerts -->
        {{ Html::style('admin_asset/assets/sweet-alert/sweet-alert.min.css') }}

        <!--venobox lightbox-->
        <link href="{{ URL::asset('admin_asset/assets/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        {{ Html::style('admin_asset/assets/datatables/jquery.dataTables.min.css') }}


        <!-- Custom Files -->
        {{ Html::style('admin_asset/css/helper.css') }}
        {{ Html::style('admin_asset/css/style.css') }}
        <!-- Select2 css -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <link href="{{ URL::asset('fullcalendar/fullcalendar.css') }}"/>
        <link href="{{ URL::asset('fullcalendar/fullcalendar.min.css') }}"/>
        <!--calendar -->
        <link href="{{ URL::asset('admin_asset/assets/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('admin_asset/assets/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('admin_asset/assets/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

        {{ Html::script('admin_asset/js/modernizr.min.js') }}

        <!-- tinymce -->
        {{ Html::script('admin_asset/tinymce/tinymce.min.js') }}
    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{ action('AdminController@index') }}" class="logo"><i class="md md-terrain"></i> <span>Admin</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                @if (Auth::guest())
                                    <li class="dropdown hidden-xs"><a href="{{ url('/login') }}">Login</a></li>
                                    <li class="dropdown hidden-xs"><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                                      <img src="{!! asset('').Auth::user()->avatar !!}" alt="user-img" class="img-circle">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        {{-- <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li> --}}
                                        <li><a href="{{ url('/logout') }}"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="{!! asset('').Auth::user()->avatar !!}" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    {{-- <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li> --}}
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ action('AdminController@index') }}" class="waves-effect {{ Request::segment(2) === 'home' ? 'active' : null }}"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i><span> Content </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                  <li class="{{ Request::segment(2) === 'news' ? 'active' : null }}">
                                      <a href="{{ action('NewsController@index') }}" class="waves-effect {{ Request::segment(2) === 'news' ? 'active' : null }}"><i class="fa fa-newspaper-o"></i><span> News </span></a>
                                  </li>
                                  <li class="{{ Request::segment(2) === 'gallery' ? 'active' : null }}">
                                      <a href="{{ action('GalleryController@index') }}" class="waves-effect {{ Request::segment(2) === 'gallery' ? 'active' : null }}"><i class="fa fa-picture-o"></i><span> Gallery </span></a>
                                  </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Requirement </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                  <li class="{{ Request::segment(2) === 'tag' ? 'active' : null }}">
                                      <a href="{{ action('TagController@index') }}" class="waves-effect {{ Request::segment(2) === 'tag' ? 'active' : null }}"><i class="fa fa-tags"></i><span> Tags </span></a>
                                  </li>
                                  <li class="{{ Request::segment(2) === 'rank' ? 'active' : null }}">
                                      <a href="{{ action('RankController@index') }}" class="waves-effect {{ Request::segment(2) === 'rank' ? 'active' : null }}"><i class="fa fa-trophy"></i><span> Ranks </span></a>
                                  </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-folder-open"></i><span> Data </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                  <li class="{{ Request::segment(2) === 'user' ? 'active' : null }}">
                                      <a href="{{ action('UserAdminController@index') }}" class="waves-effect {{ Request::segment(2) === 'user' ? 'active' : null }}"><i class="fa fa-user"></i><span> User </span></a>
                                  </li>
                                  <li class="{{ Request::segment(2) === 'role-user' ? 'active' : null }}">
                                      <a href="{{ action('RoleUserController@index') }}" class="waves-effect {{ Request::segment(2) === 'role-user' ? 'active' : null }}"><i class="fa fa-user"></i><span> Role User </span></a>
                                  </li>
                                  <li class="{{ Request::segment(2) === 'sponsor' ? 'active' : null }}">
                                      <a href="{{ action('SponsorController@index') }}" class="waves-effect {{ Request::segment(2) === 'sponsor' ? 'active' : null }}"><i class="ion-person-stalker"></i><span> Sponsor </span></a>
                                  </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-life-buoy"></i><span> Event </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                <li class="{{ Request::segment(2) === 'event' ? 'active' : null }}">
                                    <a href="{{ action('EventController@index') }}" class="waves-effect {{ Request::segment(2) === 'event' ? 'active' : null }}"><i class="fa fa-folder-open"></i><span> Events </span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'participant-event' ? 'active' : null }}">
                                    <a href="{{ action('ParticipantController@event_index') }}" class="waves-effect {{ Request::segment(2) === 'participant-event' ? 'active' : null }}"><i class="fa fa-users"></i><span> Participant </span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'event-match' ? 'active' : null }}">
                                    <a href="{{ action('EventMatchController@index') }}" class="waves-effect {{ Request::segment(2) === 'event-match' ? 'active' : null }}"><i class="fa fa-gamepad"></i><span> Match </span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'event-statistic' ? 'active' : null }}">
                                    <a href="{{ action('EventStatisticController@index') }}" class="waves-effect {{ Request::segment(2) === 'event-statistic' ? 'active' : null }}"><i class="fa fa-line-chart"></i><span> Statistic </span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'result' ? 'active' : null }}">
                                    <a href="{{ action('ResultController@index') }}" class="waves-effect {{ Request::segment(2) === 'result' ? 'active' : null }}"><i class="fa fa-th-list"></i><span> Result </span></a>
                                </li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-money"></i><span> Laporan Keuangan </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                  <li class="{{ Request::segment(2) === 'pemasukan' ? 'active' : null }}">
                                      <a href="{{ action('PemasukanController@index') }}" class="waves-effect {{ Request::segment(2) === 'pemasukan' ? 'active' : null }}"><i class="fa fa-mail-forward"></i><span> Pemasukan </span></a>
                                  </li>
                                  <li class="{{ Request::segment(2) === 'pengeluaran' ? 'active' : null }}">
                                      <a href="#" class="waves-effect {{ Request::segment(2) === 'pengeluaran' ? 'active' : null }}"><i class="fa fa-mail-reply"></i><span> Pengeluaran </span></a>
                                  </li>
                                  <li class="{{ Request::segment(2) === 'report' ? 'active' : null }}">
                                      <a href="#" class="waves-effect {{ Request::segment(2) === 'report' ? 'active' : null }}"><i class="fa fa-file-excel-o"></i><span> Report </span></a>
                                  </li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(2) === 'schedule' ? 'active' : null }}">
                                <a href="{{ action('ScheduleController@index') }}" class="waves-effect {{ Request::segment(2) === 'schedule' ? 'active' : null }}"><i class="md md-event"></i><span> Schedule </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    @yield('content')
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-1.jpg') }}" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-2.jpg') }}" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-3.jpg') }}" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-4.jpg') }}" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-5.jpg') }}" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-6.jpg') }}" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-7.jpg') }}" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-8.jpg') }}" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-9.jpg') }}" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ URL::asset('admin_asset/images/users/avatar-10.jpg') }}" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        {{ Html::script('admin_asset/js/jquery.min.js') }}
        {{ Html::script('admin_asset/js/bootstrap.min.js') }}
        {{ Html::script('admin_asset/js/waves.js') }}
        {{ Html::script('admin_asset/js/wow.min.js') }}
        {{ Html::script('admin_asset/js/jquery.nicescroll.js') }}
        {{ Html::script('admin_asset/js/jquery.scrollTo.min.js') }}
        {{ Html::script('admin_asset/assets/chat/moment-2.2.1.js') }}
        {{ Html::script('admin_asset/assets/jquery-sparkline/jquery.sparkline.min.js') }}
        {{ Html::script('admin_asset/assets/jquery-detectmobile/detect.js') }}
        {{ Html::script('admin_asset/assets/fastclick/fastclick.js') }}
        {{ Html::script('admin_asset/assets/jquery-slimscroll/jquery.slimscroll.js') }}
        {{ Html::script('admin_asset/assets/jquery-blockui/jquery.blockUI.js') }}

        <!-- Select2 -->
        {{ Html::script('admin_asset/assets/select2/select2.min.js') }}

        <!-- sweet alerts -->
        {{ Html::script('admin_asset/assets/sweet-alert/sweet-alert.min.js') }}
        {{ Html::script('admin_asset/assets/sweet-alert/sweet-alert.init.js') }}

        <!-- flot Chart -->
        {{ Html::script('admin_asset/assets/flot-chart/jquery.flot.js') }}
        {{ Html::script('admin_asset/assets/flot-chart/jquery.flot.time.js') }}
        {{ Html::script('admin_asset/assets/flot-chart/jquery.flot.tooltip.min.js') }}
        {{ Html::script('admin_asset/assets/flot-chart/jquery.flot.resize.js') }}
        {{ Html::script('admin_asset/assets/flot-chart/jquery.flot.pie.js') }}
        {{ Html::script('admin_asset/assets/flot-chart/jquery.flot.selection.js') }}
        {{ Html::script('admin_asset/assets/flot-chart/jquery.flot.stack.js') }}
        {{ Html::script('admin_asset/assets/flot-chart/jquery.flot.crosshair.js') }}

        <!-- Counter-up -->
        {{ Html::script('admin_asset/assets/counterup/waypoints.min.js') }}
        {{ Html::script('admin_asset/assets/counterup/jquery.counterup.min.js') }}

        <!-- CUSTOM JS -->
        {{ Html::script('admin_asset/js/jquery.app.js') }}
        {{ Html::script('admin_asset/assets/datatables/jquery.dataTables.min.js') }}
        {{ Html::script('admin_asset/assets/datatables/dataTables.bootstrap.js') }}

        <!-- Dashboard -->
        {{ Html::script('admin_asset/js/jquery.dashboard.js') }}

        <!-- Chat -->
        {{ Html::script('admin_asset/js/jquery.chat.js') }}

        <!-- Todo -->
        {{ Html::script('admin_asset/js/jquery.todo.js') }}

        <!-- Schedule -->

        <!-- Datatables JQuery -->
        <!-- <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> -->

        <!-- BEGIN PAGE SCHEDULE -->

        <script src="{{ URL::asset('admin_asset/assets/fullcalendar/fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/fullcalendar/fullcalendar.js') }}"></script>
        <script src="{{ URL::asset('admin_asset/assets/fullcalendar/moment.min.js') }}"></script>

       <script type="text/javascript" src="{{ URL::asset('admin_asset/assets/gallery/isotope.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('admin_asset/assets/magnific-popup/magnific-popup.js') }}"></script>

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


        <!-- CUSTOM JS -->
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <!-- App scripts -->
        @stack('scripts')

        @yield('footer')
    </body>
</html>
