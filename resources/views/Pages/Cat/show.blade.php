@extends('layouts.main')

@section('content')
<!-- ====================================== Content Start =========================== -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ================================= Content end   ================================ -->
<div class="page-title-area text-white bg-image bg-overlay ptb-60 ptb-140" 
style="background-image:url('{{ asset(option('Categories')) }}');">
<div class="container"> 
<div class="row">
<div class="col-12">
<div class="page-header-content">
<div class="page-header-caption">
    <h1>{!! $Category->{'Title_'.$Locale} !!}</h1>
</div>
<div class="breadcrumb-area">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{!! url('') !!}">{!! __('main.Home') !!}</a>
        </li>   
        <li class="breadcrumb-item">
          <a>{!! __('main.Category') !!}</a>
        </li>
        <li class="breadcrumb-item">
          <a>{!! $Category->{'Title_'.$Locale} !!}</a>
        </li>
    </ol>
</div>
</div>
</div>
</div>
</div>
</div>
<!--********************************************************-->
<!--********************* SITE CONTENT *********************-->
<!--********************************************************-->
<div class="site-content">
<div class="main-wrapper ptb-80">
<div class="container">
<div class="row">
<div class="col-lg-9">
<!-- ==================== Start Site Main ==================== -->
<main class="site-main">
<div class="post single-post single-post-one">
<div class="entry-content">
<figure class="thumb text-center">
@if(isset($Category->ImageUpload->filename))
      <img src="{!! asset($Category->ImageUpload->filename) !!}" alt="{!! $Category->Title_en !!}">
@else
@endif 
</figure>
<!--  ========================= end image group =========================  -->
    <div class="related-post pt-40 mb-30">
      <h3 class="headline">{!! __('main.Listing-in-city') !!} : {!!  $Category->{'Title_'.$Locale} !!}</h3>
        <div class="row">
          @foreach($Listings as $Listing)
            <!--~~~~~ Start Post ~~~~~-->
            <div class="col-12 load-post">
                <article class="post hentry post-list">
                    <div class="entry-thumb">
                      <figure class="thumb-wrap">
                        <a href="{!! url('Listings') !!}/{!! $Listing->slug !!}">
                          @if(isset($Listing->ImageUpload->filename))
                           <img src="{!! asset($Listing->ImageUpload->filename) !!}">
                          @else
                          @endif 
                        </a>
                        <!--./ =============== featured-badge-list =============== -->
                      </figure>
                      <!--./ ================= thumb-wrap ======================== -->
                    </div><!--./ entry-thumb -->
                    <div class="content-entry-wrap">
                        <div class="entry-content">
                            <h3 class="entry-title">
                              <a href="{!! url('Listings') !!}/{!! $Listing->slug !!}">
                                {!! $Listing->{'Title_'.$Locale} !!}
                              </a>
                            </h3><!--./ entry-title -->
                        </div><!--./ entry-content -->
                        <div class="entry-meta-content">
                            <div class="entry-date">
                                <span>{!! date('M j, Y', strtotime($Listing->created_at)) !!}</span>
                            </div><!--./ entry-date -->
                            <div class="entry-category">
                                @if(isset($Listing->Client->{'Title_'.$Locale}))
                                 {!! $Listing->Client->{'Title_'.$Locale} !!}
                                @else
                                @endif
                            </div>
                            <div class="entry-category">
                                @if(isset($Listing->Category->{'Title_'.$Locale}))
                                 {!! $Listing->Category->{'Title_'.$Locale} !!}
                                @else
                                @endif
                            </div>
                            <!--./ ================= entry-category ================= -->
                        </div>
                        <!--./ ================= entry-meta-content ================= -->
                        <div class="entry-summary">
                            {!! substr($Listing->{'body_'.$Locale}, 0, 333) !!}
                        </div>
                    </div>
                    <!--./ ====================== content-entry-wrap ================ -->
                </article>
            </div><!--~./ end post ~-->
            @endforeach
        </div> 
        <!-- ======================== /.row ======================== -->    
    </div>
    <!-- ======= load Listings ================= -->
    <div class="load-more-area text-center mt-30">
        <button class="btn btn-load-more loadmore">
            <i class="fa fa-spinner"></i>
            {!! __('main.Load_More') !!}
        </button>
        <!-- ======= load Listings ============= -->
        <span class="no-posts">{!! __('main.No_more_Listings') !!}</span>
        <!-- ======= load Listings ============= -->
    </div>
</main>
</div>
<!--~~~~~ ===================== Start sidebar ===================== ~~~~~-->
<div class="col-lg-3">
<div class="sidebar">
    <div class="sidebar-inner">
       <!-- ==================== Start Bt Widget Categories ===================== -->
        <aside class="widget bt-widget-categories">
            <div class="widget-content">
                @foreach($Categories as $Category)
                <a href="{!! url('Cat') !!}/{!! $Category->slug !!}" class="cat-item">
                <div class="cat-item-inner">
                <div class="cat-thumb">
                @if(isset($Category->ImageUpload->filename)) 
                 <img src="{!! asset($Category->ImageUpload->filename) !!}" alt="{!! $Category->{'Title_'.$Locale} !!}">
                @else
                @endif
                </div>
                <div class="cat-name">
                 <span>{!! $Category->{'Title_'.$Locale} !!}</span>
                </div>
                </div>
                </a>
                @endforeach
            </div>
        </aside>
        <!-- ==================== Start Bt Popular City ============= -->
        <!-- ============== Start Widget Advertisement ============== -->
        <aside class="widget widget-text">           
            <div class="widget-content">
                <a title="{!! __('main.Categories') !!}" href="{!! url('Cat') !!}">
                    <img src="{!! asset(option('coveruser')) !!}" 
                         alt="{!! __('main.Categories') !!}">
                </a>
            </div>
        </aside>
        <!-- ============== Start Subscribe Widget ================== -->
        <aside class="widget popular-posts-widget">
            <h4 class="widget-title"><span>{!! __('main.Popular_City') !!}</span></h4>
            <div class="widget-content">
                @foreach($cites as $city)
                <!--./ ===================== start post =================== -->
                <article class="post side-post">
                <div class="thumb-wrap">
                <a href="{!! url('Cities') !!}/{!! $city->slug !!}">
                @if(isset($city->ImageUpload->filename)) 
                 <img src="{!! asset($city->ImageUpload->filename) !!}"
                      alt="{!! $city->{'Title_'.$Locale} !!}">
                @else
                @endif
                </a>
                <span class="count">{!! $city->id !!}</span></div>
                <!--./ ==================== thumb-wrap ============= -->
                <div class="content-entry-wrap">
                    <h3 class="entry-title">
                    <a href="{!! url('Cities') !!}/{!! $city->slug !!}">
                        {!! $city->{'Title_'.$Locale} !!}
                    </a>
                    </h3>
                    <!--./ ============== entry-title ============== -->
                    <div class="entry-meta-content">
                    <div class="entry-date">
                    <span>{!! date('M j, Y', strtotime($city->created_at)) !!}</span>
                    </div>
                    <!--./ ============== entry-date =============== -->
                    </div>
                    <!--./ ============== entry-meta  ============== -->
                </div>
                </article>
                <!--./ ===================== end post ============== -->
                @endforeach
            </div>
        </aside>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- ====================== Content end   =========================================== -->
@endsection