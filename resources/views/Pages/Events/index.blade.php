@extends('layouts.main')

@section('content')
<!-- ================================= Content Start ================================ -->
<span class="display-zero">{!! $Locale = LaravelLocalization::getCurrentLocale() !!}</span>
<!-- ================================= Content end   ================================ -->
<div class="site-content">
<div class="page-title-area text-white bg-image bg-overlay ptb-60" 
     style="background-image:url('{!! asset(option('coveruser')) !!}');">
<div class="container">
<div class="row">
<div class="col-12">
    <div class="page-header-content">
        <div class="page-header-caption">
            <h1>{!! __('main.Events') !!}</h1>
        </div>
        <div class="breadcrumb-area">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{!! url('') !!}">{!! __('main.Home') !!}</a>
                </li>   
                <li aria-current="page" class="breadcrumb-item active">
                  {!! __('main.Events') !!}
                </li>
            </ol>
        </div>
    </div>
    <!--~~./ ==================== page-header-content ========== ~~-->
</div>
</div>
</div>
</div>
<!--~~./ ==================== end page title area ============== ~~-->
<div class="main-wrapper pt-60">
<div class="container">
<div class="row">
    <div class="col-lg-6">
        <!--~./ ==================== site main ======================== ~-->
        <main class="site-main">
            <div class="post single-post single-post-two">
                <div class="post-header single-post-header">
                    <div class="content-entry-wrap">
                        <!--./ ================= Plans-Title ================= -->
                        <h3 class="entry-title">
                           {!! __('main.Events') !!}
                        </h3>
                        <!--./ ================= Plans-Title ================= -->
                        <p>{!! __('main.event_content') !!}</p> 
                    </div>
                    <!--./ =================== content-entry-wrap ============ -->
                </div>
            </div>
        </main>
        <!--~./ ==================== end site main ==================== ~-->
    </div>
</div>
</div>
</div>
<div class="main-wrapper style-two pb-60">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-8">
                <!--~~~~~ ================ Start Site Main ======== ~~~~~-->
                <main class="site-main">
                    <div class="row">
                        @foreach($Events as $Event)
                        <!--~~~~~ ============== Start Post ================= ~~~~~-->
                        <div class="col-lg-6 load-post">
                            <article class="post hentry">
                                <div class="entry-thumb">
                                    <!--./ ====================== thumb-wrap ====================== -->
                                    <figure class="thumb-wrap">
                                        <a href="{!! url('Events') !!}/{!! $Event->slug !!}"> 
                                        @if(isset($Event->ImageUpload->filename))
                                          <img src="{!! asset($Event->ImageUpload->filename) !!}">
                                        @else
                                        @endif
                                        </a>
                                    </figure>
                                    <!--./ ====================== thumb-wrap ====================== -->
                                </div>
                                <!--./ ====================== entry-thumb ========================= -->
                                <div class="content-entry-wrap">
                                    <div class="entry-content">
                                        <h3 class="entry-title">
                                            <a href="{!! url('Events') !!}/{!! $Event->slug !!}">
                                                {!! $Event->{'Title_'.$Locale} !!}
                                            </a>
                                        </h3>
                                        <!--./ entry-title -->
                                    </div>
                                    <!--./ entry-content -->
                                    <div class="entry-summary">
                                        <p>{!! substr($Event->{'body_'.$Locale}, 0, 100) !!}</p>
                                        <p class="read-more-wrap">
                                        <a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="read-more">
                                            {!! __('main.view_Detail') !!}
                                        </a>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </main>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <!--~~~~~ ============= Start Bt Widget Categories ============= ~~~~~-->
                    <aside class="widget bt-widget-categories">
                        <div class="widget-content">
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c1.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Transportation') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ ============ cat-item ============ ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c2.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Daily_Cleaning') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ ============ cat-item ============ ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c3.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.IT_Support') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ ============ cat-item ============ ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c4.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Food') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ ============ cat-item ============ ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c5.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Health') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ ============ cat-item ============ ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c6.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Sport') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ ============ cat-item ============ ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c7.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Healthy_Snacks') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ ============ cat-item ============ ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c8.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Phone_Lines') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ ============ cat-item ============ ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c9.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Floor_Heating') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ cat-item ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c3.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Balcony') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ cat-item ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c4.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Secure_Printers') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ cat-item ~-->
                            <span class="cat-item">
                                <div class="cat-item-inner">
                                    <div class="cat-thumb">
                                        <img src="{!! asset('assets/images/c5.png') !!}" alt="img">
                                    </div>
                                    <div class="cat-name">
                                        <span>{!! __('main.Reception') !!}</span>
                                    </div>
                                </div>
                            </span>
                            <!--~./ cat-item ~-->
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--********************************************************-->
<!--********************** SITE FOOTER *********************-->
<!--********************************************************-->
@endsection