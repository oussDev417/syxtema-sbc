@extends('layouts.main')

@section('content')
<!-- ================================= Content Start ================================ -->
<span class="display-zero">{!! $Locale = LaravelLocalization::getCurrentLocale() !!}</span>
<!-- ================================= Content end   ================================ -->
<div class="page-title-area text-white bg-image bg-overlay ptb-60 ptb-140" 
style="background-image:url('{{ asset(option('Categories')) }}');">
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="page-header-content">
        <div class="page-header-caption">
        @if(COUNT($Listings) == NULL)
        <h1>{!! __('main.No_Search') !!}</h1>
        @else
        <h1>{!! __('main.Search_library') !!} {!! COUNT($Listings) !!}</h1> 
        @endif  
        </div>
            <div class="breadcrumb-area">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{!! url('') !!}">{!! __('main.Home') !!}</a>
                    </li>   
                    <li class="breadcrumb-item">
                      <a>{!! __('main.Listings') !!}</a>
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
<div class="main-wrapper ptb-80 style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <main class="site-main">
                    <div class="row">
                        @foreach($Listings as $Listing)
                        <!-- ================== Start Post ================== -->
                        <div class="col-lg-4 load-post">
                            <article class="post hentry post-grid">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="{!! url('Listings') !!}/{!! $Listing->slug !!}">
                                        @if(isset($Listing->ImageUpload->filename)) 
                                         <img src="{!! asset($Listing->ImageUpload->filename) !!}"
                                              alt="{!! $Listing->{'Title_'.$Locale} !!}">
                                        @else
                                        @endif
                                        </a>
                                    </figure>
                                    <!--./ thumb-wrap -->
                                </div><!--./ entry-thumb -->
                                <div class="content-entry-wrap">
                                    <div class="entry-content">
                                        <h3 class="entry-title">
                                        <a href="{!! url('Listings') !!}/{!! $Listing->slug !!}">
                                          {!! $Listing->{'Title_'.$Locale} !!}
                                        </a>
                                        </h3>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- ================== Start Post ================ -->
                        @endforeach
                    </div>
                </main>
                <!-- ================== Start Post ======================== -->
                <div class="load-more-area text-center mt-30">
                    <button class="btn btn-load-more loadmore">
                        <i class="fa fa-spinner"></i>
                        {!! __('main.Load_More') !!}
                    </button>
                    <!-- ======= load Listings ============================ -->
                    <span class="no-posts">{!! __('main.No_more_Listings') !!}</span>
                    <!-- ======= load Listings ============================ -->
                </div>
                <!-- ================== Start Post ======================== -->
            </div>
            <!-- ==============  Start sidebar ============================ -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <aside class="widget bt-widget-categories">
                        <div class="widget-content">
                            @foreach($Categories as $Category)
                            <a href="{!! url('Cat') !!}/{!! $Category->slug !!}" class="cat-item">
                            <div class="cat-item-inner">
                            <div class="cat-thumb">
                            @if(isset($Category->ImageUpload->filename)) 
                             <img src="{!! asset($Category->ImageUpload->filename) !!}" 
                                  alt="{!! $Category->{'Title_'.$Locale} !!}">
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
                </div>
            </div><!--~./ end sidebar ~-->
        </div>
    </div>
</div><!--~./ end main wrapper ~-->
</div>
<!-- End site content -->
<!-- ================================= Content end   ================================ -->
@endsection