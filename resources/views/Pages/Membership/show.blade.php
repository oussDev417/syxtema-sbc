@extends('layouts.main')

@section('content')
<!-- ====================================== Content Start =========================== -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ================================= Content end   ================================ -->
@if(isset($Membership->ImageUpload->filename))
<div class="page-title-area text-white bg-image bg-overlay ptb-60" 
style="background-image:url('{!! asset($Membership->ImageUpload->filename) !!}');">
@else
<div class="page-title-area text-white bg-image bg-overlay ptb-60" 
style="background-image:url('{!! asset(option('coveruser')) !!}');">
@endif 
<div class="container">
<div class="row">
<div class="col-12">
<div class="page-header-content">
<div class="page-header-caption">
<h1>{!! $Membership->{'Title_'.$Locale} !!}</h1>
</div>
<div class="breadcrumb-area">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{!! url('') !!}">{!! __('main.Home') !!}</a></li>   
    <li aria-current="page" class="breadcrumb-item active">{!! $Membership->{'Title_'.$Locale} !!}</li>
</ol>
</div>
</div>
<!--~~./ =========================== page-header-content ==================== ~~-->
</div>
</div>
</div>
</div>
<!--~~~~~ Start Main Wrapper ~~~~~-->
<div class="main-wrapper ptb-80">
<div class="container">
    <div class="row">
<div class="col-lg-9">
<!--~~~~~ Start Site Main ~~~~~-->
<main class="site-main">
<div class="post single-post single-post-one">
    <div class="entry-content">
    @if(isset($Membership->ImageUpload->filename))
          <img src="{!! asset($Membership->ImageUpload->filename) !!}" 
               alt="{!! $Membership->Title_en !!}">
    @else
    @endif 
    <p class="mt-5">
      {!! $Membership->{'body_'.$Locale} !!}
    </p> 
    </div>
      <div class="entry-footer mt-60">
<!--/. ========= entry-tag ============================================ -->
<div class="entry-tag">
<a rel="tag">{!! date('M j, Y', strtotime($Membership->created_at)) !!}</a>
@if(isset($Membership->Category->{'Title_'.$Locale}))
<a rel="tag">{!! $Membership->Category->{'Title_'.$Locale} !!}</a>
@else
@endif
<a rel="tag">{!! $Membership->price !!}</a>
<a rel="tag">{!! $Membership->hours !!}</a>
<a rel="tag">{!! $Membership->map !!}</a>   
</div>
<!--/. =========================== entry-tag =============================== -->
</div>
<!--/. ============================ responsive video ======================= -->
<div class="responsive-video" style="padding:56.25% 0 0 0;position:relative;">
<iframe src="{!! $Membership->video !!}" 
style="position:absolute;top:0;left:0;width:100%;height:100%;"
allow="autoplay; fullscreen" allowfullscreen>
</iframe>
</div>
<!--/. ============================ Start Author Info ======================== -->
@foreach($Comments as $comment)
<div class="author-info mb-80">
<!-- / =================== author-img ==================================== -->
<div id="author-img">
@if(isset($comment->User->ImageUpload->filename))
<figure class="at-img">
    <img src="{!! asset($comment->User->ImageUpload->filename) !!}" 
         alt="{!! $comment->User->name !!}">
</figure>
@else
@endif
</div>
<!-- / =================== author-img ==================================== -->
<div id="author-details">
@if(isset($comment->User->name))
<h3 class="author-name">{!! $comment->User->name !!}</h3>
@else
@endif
<div class="authors-bio">
    <p>{!! $comment->Comment !!}</p>
    <p class="form-submit">
    <form class="display-inline" action="{{ route('Comments.destroy',$comment->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input class="btn btn-primary rounded-pill" type="submit" value="{!! __('main.Delete') !!}">
    </form>    
    </p>
</div>
</div>
<!-- =================== /author-details =============================== -->   
</div>
@endforeach
<!--/. ============================ responsive video ======================= -->
<!--~~~~~ Start Comments Area ~~~~~-->
<div class="comments-area" id="comments">
    <div class="comment-respond" id="respond">
        <h3 class="comment-reply-title headline">
            <span>{!! __('main.Leave_Reply') !!}</span>
        </h3>
<form method="post" action="{!! route('Comments.store') !!}">
{!! csrf_field() !!}  
<input type="text" name="Post_id" hidden="" value="{!! $Membership->id !!}">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <textarea 
                                         name="Comment" 
                                         class="form-controllar"
                                         aria-required="true" rows="8" cols="45" 
                                         placeholder="{!! __('main.Write_Comment') !!}">
                                         </textarea>
                                    </p>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <p class="form-submit">
                                        <button type="submit" class="btn btn-primary">
                                           {!! __('main.Comment') !!}
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>   
                    </div><!-- #respond -->      
                </div> <!--~./ end comments area ~-->
            </main>
            <!--~./ end site main ~-->
        </div>
        <!--~~~~~ =============== Start sidebar ======= ~~~~~-->
        <div class="col-lg-3">
          <div class="sidebar">
        <!--~~~~~ Start Bt Widget Categories~~~~~-->
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
                <!--~./ cat-item ~-->
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
                
                <span class="cat-item">
                    <div class="cat-item-inner">
                        <div class="cat-thumb">
                            <img src="{!! asset('assets/images/c3.png') !!}" alt="img">
                        </div>
                        <div class="cat-name">
                            <span>{!! __('main.IT_Support') !!}</span>
                        </div>
                    </div>
                </span><!--~./ cat-item ~-->
                
                <span class="cat-item">
                    <div class="cat-item-inner">
                        <div class="cat-thumb">
                            <img src="{!! asset('assets/images/c4.png') !!}" alt="img">
                        </div>
                        <div class="cat-name">
                            <span>{!! __('main.Food') !!}</span>
                        </div>
                    </div>
                </span><!--~./ cat-item ~-->
                
                <span class="cat-item">
                    <div class="cat-item-inner">
                        <div class="cat-thumb">
                            <img src="{!! asset('assets/images/c5.png') !!}" alt="img">
                        </div>
                        <div class="cat-name">
                            <span>{!! __('main.Health') !!}</span>
                        </div>
                    </div>
                </span><!--~./ cat-item ~-->
                
                <span class="cat-item">
                    <div class="cat-item-inner">
                        <div class="cat-thumb">
                            <img src="{!! asset('assets/images/c6.png') !!}" alt="img">
                        </div>
                        <div class="cat-name">
                            <span>{!! __('main.Sport') !!}</span>
                        </div>
                    </div>
                </span><!--~./ cat-item ~-->
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
                <!--~./ cat-item ~-->
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
                <!--~./ cat-item ~-->
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
        <!--~./ =============== end sidebar =============== ~-->
    </div>
</div>
</div>
<!-- ====================== Content end   =========================================== -->
@endsection