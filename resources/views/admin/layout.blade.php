<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'www.baho.com') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    @section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/smartadmin-production-plugins.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/smartadmin-production.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/smartadmin-skins.min.css') }}">

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/smartadmin-rtl.min.css') }}">

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/demo.min.css') }}">
    
    <link rel="shortcut icon" href="{{ asset('images/demo/logo.jpeg') }}" type="image/jpeg">
    <link rel="icon" href="{{ asset('images/demo/logo.jpeg') }}" type="image/jpeg">
 
    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    <style>
    .navbar-default {
        background-color: #9b0c15;
        border-color: inherit;
    }
    .navbar-default a{
        color:#D8D00D !important;
    }
    
    aside{
      background: linear-gradient(to right,#9b0c15 93%,#82050b 100%);
    }
    .page-footer{
      background: #82050b;
    }
    #logo{
      font-size:19px;
      color:#D8D00D;
    }
    #header{
      background-image: none;
      background-color:#82050b;
    }
    </style>
    @show 
    
</head>
<body>
  <!-- HEADER -->
  <header id="header">
    <div id="logo-group">

      <!-- PLACE YOUR LOGO HERE -->
      <span id="logo"> <center>Baho</center> </span>
      <!-- END LOGO PLACEHOLDER -->

      <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
      <div class="ajax-dropdown">

        <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
        <div class="btn-group btn-group-justified" data-toggle="buttons">
          <label class="btn btn-default">
            <input type="radio" name="activity" id="ajax/notify/mail.html">
            Msgs (14) </label>
          <label class="btn btn-default">
            <input type="radio" name="activity" id="ajax/notify/notifications.html">
            notify (3) </label>
          <label class="btn btn-default">
            <input type="radio" name="activity" id="ajax/notify/tasks.html">
            Tasks (4) </label>
        </div>

        <!-- notification content -->
        <div class="ajax-notifications custom-scroll">

          <div class="alert alert-transparent">
            <h4>Click a button to show messages here</h4>
            This blank page message helps protect your privacy, or you can show the first message here automatically.
          </div>

          <i class="fa fa-lock fa-4x fa-border"></i>

        </div>
        <!-- end notification content -->

        <!-- footer: refresh area -->
        <span> Last updated on: 12/12/2013 9:43AM
          <button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
            <i class="fa fa-refresh"></i>
          </button> 
        </span>
        <!-- end footer -->

      </div>
      <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown -->
    
    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">
      
      <!-- collapse menu button -->
      <div id="hide-menu" class="btn-header pull-right">
        <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
      </div>
      <!-- end collapse menu -->
      
      <!-- #MOBILE -->
      <!-- Top menu profile link : this shows only when top menu is active -->
      <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
        <li class="">
          <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
            <img src="assets/img/avatars/sunny.png" alt="John Doe" class="online" />  
          </a>
          <ul class="dropdown-menu pull-right">
            <li>
              <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
            </li>
          </ul>
        </li>
      </ul>

      <!-- logout button -->
      <div id="logout" class="btn-header transparent pull-right">
        <span> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i></a> </span>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
      <!-- end logout button -->

      <!-- search mobile button (this is hidden till mobile view port) -->
      <div id="search-mobile" class="btn-header transparent pull-right">
        <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
      </div>
      <!-- end search mobile button -->

      <!-- input: search field -->
      <!-- <form class="header-search pull-right">
        <input id="search-fld" type="text" name="param" placeholder="Find reports and more" data-autocomplete='[
        "brands",
        "users",
        "language",
        "supplier",
        "news",
        "category",
        "post"
        ]'>
        <button onclick="searchpage()">
          <i class="fa fa-search" ></i>
        </button>
        <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
      </form> -->
      <!-- end input: search field -->

      <!-- fullscreen button -->
      <div id="fullscreen" class="btn-header transparent pull-right">
        <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
      </div>
      <!-- end fullscreen button -->
      
      <!-- #Voice Command: Start Speech -->
      <div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
        <div> 
          <div class="popover bottom"><div class="arrow"></div>
            <div class="popover-content">
              <h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
              <h4 class="vc-title-error text-center">
                <i class="fa fa-microphone-slash"></i> Voice command failed
                <br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
                <br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
              </h4>
              <a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a> 
              <a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a> 
            </div>
          </div>
        </div>
      </div>
      <!-- end voice command -->

      <!-- multiple lang dropdown : find all flags in the flags page -->
      <ul class="header-dropdown-list hidden-xs" style="display:none;">
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="img/blank.gif" class="flag flag-us" alt="United States"> <span> English (US) </span> <i class="fa fa-angle-down"></i> </a>
          <ul class="dropdown-menu pull-right">
            <li class="active">
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
            </li>
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
            </li>
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
            </li>
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
            </li>
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
            </li>
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
            </li> 
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
            </li> 
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
            </li>
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
            </li>
            <li>
              <a href="javascript:void(0);"><img src="assets/img/blank.gif" class="flag flag-kr" alt="Korea"> 한국어</a>
            </li>           
            
          </ul>
        </li>
      </ul>
      <!-- end multiple lang -->

    </div>
    <!-- end pulled right: nav area -->

  </header>
  <!-- END HEADER -->

  <!-- Left panel : Navigation area -->
  <!-- Note: This width of the aside area can be adjusted through LESS variables -->
  <aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
      <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
        <a href="{{ route('admin.index') }}">
          <img src="{{ asset('images/logo.jpeg') }}">
          <span style="">
            Admin
          </span>
        </a> 
      </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
      <ul>
        <li class="">
          <a href="" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
        </li>
        <li class="">
          <a href="{{ route('admin.category') }}" title="Category"><i class="fa fa-list-ul"></i> <span class="menu-item-parent">Category</span></a>
        </li>
        <li class="">
          <a href="{{ route('admin.post') }}" title="Post"><i class="glyphicon glyphicon-pushpin"></i> <span class="menu-item-parent">Post</span></a>
        </li>
        <li class="">
          <a href="{{ route('admin.member') }}" title="Member"><i class="fa fa-user"></i> <span class="menu-item-parent">Member</span></a>
        </li>

        <li class="">
          <a href="{{ route('admin.contact') }}" title="Contact"><i class="fa fa-support"></i> <span class="menu-item-parent">Contact</span></a>
        </li>

        <li class="{{ route('admin.user') }}">
          <a href="user" title="User"><i class="fa fa-user"></i> <span class="menu-item-parent">User</span></a>
        </li> 
        
      </ul>
    </nav>
    <span class="minifyme" data-action="minifyMenu"> 
      <i class="fa fa-arrow-circle-left hit"></i> 
    </span>

  </aside>
  

  
  <div id="main" role="main">
    <!-- <div id="ribbon">
      <span class="ribbon-button-alignment"> 
        <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
          <i class="fa fa-refresh"></i>
        </span> 
      </span>

      <ol class="breadcrumb" ng-bind-html="ribbontitle | rawHtml">
        
      </ol>
    </div> -->
    
    <!-- <div id="content" style="padding: 10px 14px;" ng-show='isViewLoading'>
      <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
          <h1 class="ajax-loading-animation"><i class="fa fa-cog fa-spin"></i> Loading..... </h1>
        </div>
      </div>
    </div> -->
    
    @yield('content')
    
  </div>

  
  <!-- END MAIN PANEL -->

  <!-- PAGE FOOTER -->
  <div class="page-footer">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <span class="txt-color-white">Baho <span class="hidden-xs"> - Administration Management System</span> © 2017-2018</span>
      </div>

      <div class="col-xs-6 col-sm-6 text-right hidden-xs">
        <div class="txt-color-white inline-block">
          <i class="txt-color-blueLight hidden-mobile">Developed By <strong>5pro IT Solution &nbsp;</strong> </i>
          
        </div>
      </div>
    </div>
  </div>
  <!-- END PAGE FOOTER -->

  <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
  Note: These tiles are completely responsive,
  you can add as many as you like
  -->
  <div id="shortcut">
    <ul>
      <li>
        <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
      </li>
      <li>
        <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
      </li>
      <li>
        <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
      </li>
      <li>
        <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
      </li>
      <li>
        <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
      </li>
      <li>
        <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
      </li>
    </ul>
  </div>

@section('scripts')
<script src="{{ asset('assets/js/app.config.js') }}"></script>
<script src="{{ asset('assets/js/smartwidgets/jarvis.widget.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<script src="{{ asset('assets/app/clientapp.js') }}"></script>
<script src="{{ asset('assets/js/ui-bootstrap-tpls-0.10.0.min.js') }}"></script>
<script src="{{ asset('assets/js/notification/SmartNotification.min.js') }}"></script>
<script src="<?php //echo base_url(); ?>assets/js/plugin/select2/select2.min.js') }}"></script>
@show

</body>
</html>



