<!DOCTYPE html>
<html lang="zxx">
<head> 
<!-- ===================================== Meta site ================================================ -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<!-- ====== Laravel description site edit delete from admin panel =================================== -->
<meta name="description" content="{!! option('MetaDescription')  !!}">
<!-- ====== Laravel keywords site edit delete from admin panel ====================================== -->
<meta name="keywords" content="{!! option('MetaKeyWords')  !!}">   
<!-- ====== Laravel favicon icon ==================================================================== -->
<link rel="apple-touch-icon" sizes="57x57" href="{!! asset('assets/images/favicon/apple-icon-57x57.png') !!}">
<link rel="apple-touch-icon" sizes="60x60" href="{!! asset('assets/images/favicon/apple-icon-60x60.png') !!}">
<link rel="apple-touch-icon" sizes="72x72" href="{!! asset('assets/images/favicon/apple-icon-72x72.png') !!}">
<link rel="apple-touch-icon" sizes="76x76" href="{!! asset('assets/images/favicon/apple-icon-76x76.png') !!}">
<link rel="apple-touch-icon" sizes="114x114" href="{!! asset('assets/images/favicon/apple-icon-114x114.png') !!}">
<link rel="apple-touch-icon" sizes="120x120" href="{!! asset('assets/images/favicon/apple-icon-120x120.png') !!}">
<link rel="apple-touch-icon" sizes="144x144" href="{!! asset('assets/images/favicon/apple-icon-144x144.png') !!}">
<link rel="apple-touch-icon" sizes="152x152" href="{!! asset('assets/images/favicon/apple-icon-152x152.png') !!}">
<link rel="apple-touch-icon" sizes="180x180" href="{!! asset('assets/images/favicon/apple-icon-180x180.png') !!}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{!! asset(option('Favicon')) !!}">
<link rel="icon" type="image/png" sizes="96x96" href="{!! asset(option('Favicon')) !!}">
<link rel="icon" type="image/png" sizes="16x16" href="{!! asset(option('Favicon')) !!}">
<link rel="manifest" href="{!! asset('assets/images/favicon/manifest.json') !!}">
<!-- ====== Laravel favicon icon ===================================================================== -->
<title>{!! option('SiteTitle') !!}</title>
<!--- ========================= Font Icon ============================================================ -->
<link rel="stylesheet" href="{!! asset('assets/css/fontawesome.all.min.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/css/fontawesome.min.css') !!}">
<!-- Place favicon.ico in the root directory ========================================================= -->
<link rel="shortcut icon" href="{!! asset('assets/images/favicon.png') !!}">
<!-- ====================== Plugins css ============================================================== -->
<link rel="stylesheet" href="{!! asset('assets/css/plugins/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/css/plugins/animate.min.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/css/plugins/owl.carousel.min.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/css/plugins/breaking-news-ticker.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/css/plugins/trackpad-scroll-emulator.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/css/plugins/meanmenu.min.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/style.css') !!}">
<span class="display-zero">{!! $Locale = LaravelLocalization::getCurrentLocale() !!}</span>
</head>
<body>
<!--********************************************************-->
<!--********************* SITE HEADER **********************-->
<!--********************************************************-->
<header class="site-header header-style-two header-style-four">
<div class="site-navigation">
<div class="container">
<div class="row">
<div class="col-12">
<div class="navbar navbar-expand-lg navigation-area">
<div class="site-logo-block">
<a class="navbar-brand site-logo" href="{!! url('') !!}">
    <img alt="{!! option('SiteTitle')  !!}" src="{!! asset(option('logo')) !!}" class="logo" width="40%">
</a>   
</div>
<div class="mainmenu-area">
<nav class="menu">
<ul id="nav">
@foreach(Menus() as $Menu)
 <li>
    <a href="{!! url($Menu->url) !!}" target="{!! $Menu->target !!}">
     @if(isset($Menu->{'Title_'.$Locale}))
        {!! $Menu->{'Title_'.$Locale} !!}
     @else
        {!! $Menu->Title_fr !!}
     @endif
  </a>
</li>
@endforeach
<li class="dropdown-trigger">
<a href="#">{!! __('main.Language') !!}</a>
<ul class="dropdown-content">
@if(option('Language') == 'on')
@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
<li>
    <a rel="alternate" hreflang="{!! $localeCode !!}" 
       href="{!! LaravelLocalization::getLocalizedURL($localeCode, null, [], true) !!}">
       {!! $properties['native'] !!}
    </a>
</li>
@endforeach 
@else
@endif
</ul>
</li>
</ul>
</nav>
</div>
<div class="header-navigation-right text-right">
@guest
<a class="btn btn-primary mr-2" href="{!! route('login') !!}">
    <i class="fas fa-walking"></i> {!! __('main.Sign_in') !!}</a>
<a class="btn btn-primary" href="{!! route('register') !!}">
    <i class="fas fa-user-astronaut"></i> {!! __('main.Sign_Up') !!}</a>
@else
<div class="entry-meta-content">
<div class="entry-meta-author mr-3">
<div class="entry-author-thumb">
 @if(isset(Auth::user()->ImageUpload->filename))
 <img class="avatar avatar-img-2 photo" src="{!! asset(Auth::user()->ImageUpload->filename) !!}" width="35" height="35">
 @else
 <img class="avatar avatar-img-2 photo" src="{!! asset('assets/images/avatar.png') !!}" width="35" height="35">
 @endif
</div>
<div class="entry-date">
    @hasrole('Super-Admin')
     <a href="{!! url('admin') !!}" class="avatar-img pr-1"> {!! Auth::user()->name !!}</a>
    @else
    @if(isset(Auth::user()->name))
    <a class="avatar-img pr-1">{!! Auth::user()->name !!}</a>
    @else
    @endif
    @endhasrole
</div>
</div>
</div>
<a class="btn btn-primary" 
   href="{!! route('logout') !!}" 
   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
   <i class="fas fa-sign-out-alt pr-1"></i> 
   {!! __('main.Sign_Out') !!} 
</a>
<form id="logout-form" 
      action="{!! route('logout') !!}" 
      method="POST" 
      class="display-zero">
@csrf
</form>
@endguest
</div>
<!--~./ header-navigation-right ~-->
</div>
<!--~./ navigation-area ~-->
</div>
</div>
</div>
</div>
<!--~./  ============ site-navigation ==================== ~-->
<div class="mobile-menu">
<a class="mobile-logo" href="{!! url('') !!}">
  <img alt="{!! option('SiteTitle')  !!}" 
       src="{!! asset(option('logo-black')) !!}" 
       width="30%">
</a>
</div>
<!--~~./ ============ end mobile menu =================== ~~-->
</header>
<!--********************************************************-->
<!--********************** SITE HEADER *********************-->
<!--********************************************************-->
@yield('content')
<!--********************************************************-->
<!--********************** SITE FOOTER *********************-->
<!--********************************************************-->
<footer class="site-footer footer-default-style footer-style-two">
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <!--~~~~~ ================= Start Widget About us Info ================= ~~~~~--> 
                <div class="col-lg-6">
                    <aside class="widget bt-about-us-widget">
                        <div class="widget-content">
                            <div class="about-logo">
                            <a href="{!! url('') !!}">
                            <img alt="{!! option('SiteTitle')  !!}" 
                                 src="{!! asset(option('logo')) !!}" 
                                 width="20%">
                            </a>
                            </div>
                            <p>
                               @if($Locale == 'fr')
                                {!! option('Home_fr') !!}
                               @else
                                {!! option('Home_en') !!}
                               @endif
                            </p>
                        </div>
                    </aside>
                </div>
                <!--~./ ============== End about us widget ============== ~-->
                <!--~~~~~ ============== Start Widget link ============== ~--> 
                <div class="col-lg-3">
                    <aside class="widget widget-list">
                        <div class="widget-content">
                            <ul class="list">
                                <li><a href="{!! url('') !!}">{!! __('main.Privacy_Policy') !!}</a></li>
                                <li><a href="{!! url('Contacts') !!}">{!! __('main.Contact_Us') !!}</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!--~~~~~ ============== Start Widget link ============== ~--> 
                <!--~~~~~ Start Social Profile Widget ~~~~~--> 
                <div class="col-lg-3">
                    <aside class="widget bt-social-profile-widget">
                        <div class="widget-content">
                            <div class="social-profile text-right">
                                <ul class="social-share-two">
        <li><a class="facebook" href="{!! option('Facebook') !!}"><i class="fa fa-facebook"></i></a></li>
        <li><a class="twitter" href="{!! option('Twitter') !!}"><i class="fa fa-twitter"></i></a></li>
        <li><a class="youtube" href="{!! option('youtube') !!}"><i class="fa fa-youtube"></i></a></li>
        <li><a class="instagram" href="{!! option('Instagram') !!}"><i class="fa fa-instagram"></i></a></li>
        <li><a class="youtube" href="{!! option('GitHub') !!}"><i class="fa fa-github"></i></a></li>
        <li><a class="youtube" href="{!! option('Pinterest') !!}"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div><!--~./ end social profile widget ~-->
            </div>
        </div>
    </div>
    <!--~./ end footer widgets area ~-->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>{!! __('main.Reserved') !!}</p>
                    </div>
                </div>
                <!--~./ ==================== end copyright ===================== ~-->
                <div class="col-lg-6 col-md-6">
                    <div class="footer-menu">
                        <ul class="list">
                            <li><a href="{!! url('') !!}">{!! __('main.Privacy_Policy') !!}</a></li>
                            <li><a href="{!! url('Contacts') !!}">{!! __('main.Contact_Us') !!}</a></li>
                        </ul>
                    </div>
                    <!--~./ ================== end footer menu ================= ~-->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ===================== jQuery js ===================== -->
<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
<!-- ===================== Bootstrap js ===================== -->
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!-- ===================== Popper js ===================== -->
<script src="{!! asset('assets/js/popper.min.js') !!}"></script>
<!-- ===================== Owl carousel js ===================== -->
<script src="{!! asset('assets/js/owl.carousel.min.js') !!}"></script>
<!-- ===================== Masonary js ===================== -->
<script src="{!! asset('assets/js/masonary.min.js') !!}"></script>
<!-- ===================== News Ticker js ===================== -->
<script src="{!! asset('assets/js/breaking-news-ticker.min.js') !!}"></script>
<!-- ===================== Trackpad Scroll js ===================== -->
<script src="{!! asset('assets/js/jquery.trackpad-scroll-emulator.min.js') !!}"></script>
<!-- ===================== Sticky ResizeSensor js ===================== -->
<script src="{!! asset('assets/js/ResizeSensor.min.js') !!}"></script>
<!-- ===================== Sticky Sidebar js ===================== -->
<script src="{!! asset('assets/js/theia-sticky-sidebar.min.js') !!}"></script>
<!-- ===================== Plugin js ===================== -->
<script src="{!! asset('assets/js/plugins.js') !!}"></script>
<!-- ===================== main js ===================== -->
<script src="{!! asset('assets/js/main.js') !!}"></script>
</body>
</html>