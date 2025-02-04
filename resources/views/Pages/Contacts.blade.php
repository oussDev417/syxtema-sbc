@extends('layouts.main')

@section('content')
<!-- =================================  LaravelLocalization ========================= -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- =================================  LaravelLocalization ========================= -->
<div class="site-content">
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start Page Title Area
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="page-title-area text-white bg-image bg-overlay ptb-60" 
     style="background-image:url('{!! asset(option('coveruser')) !!}');">
<div class="container">
    <div class="row"> 
        <div class="col-12">
            <div class="page-header-content">
                <div class="page-header-caption">
                    <h1>{!! __('main.Contact_us') !!}</h1>
                </div>
                <div class="breadcrumb-area">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{!! url('') !!}">{!! __('main.Home') !!}</a></li>   
                        <li aria-current="page" class="breadcrumb-item active">{!! __('main.Contact_us') !!}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--~~./ ==================== end container ======================================== ~~-->
</div>
<!--~~./ ==================== end page title area ================================== ~~-->
<div class="main-wrapper ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <main class="site-main">
                    <div class="post single-post single-post-two">
                        <div class="post-header single-post-header">
                            <div class="content-entry-wrap">
                                <!--./ ================= Plans-Title ================= -->
                                <h3 class="entry-title">
                                   {!! __('main.Contact_us') !!}
                                </h3>
                                <!--./ ================= Plans-Title ================= -->
                                <p>
                                   @if($Locale == 'fr')
                                    {!! option('Home_fr') !!}
                                   @else
                                    {!! option('Home_en') !!}
                                   @endif
                                </p>
                            </div>
                            <!--./ content-entry-wrap -->
                        </div>
                        <div class="single-post-content">
                        <!--~~~~~ Start Comments Area ~~~~~-->
                                <div class="comments-area" id="comments">
                                <div class="comment-respond" id="respond">
                                    <h3 class="comment-reply-title headline">
                                        <span>{!! __('main.Messages') !!}</span>
                                    </h3>
                                    <!--   ================  Messagge ==============================================  -->
                                    @if(session('Messagge'))
                                    <div class="alert alert-primary" role="alert">
                                        {!! __('main.Congratulations_Message') !!}
                                    </div>
                                    @endif
                                    <!--   ===============================  Messagge  ==============================  -->
                                    @if ($errors->any()) 
                                    <div class="uk-alert-success" uk-alert>
                                        <a class="uk-alert-close" uk-close></a><p>
                                            @foreach ($errors->all() as $error)
                                            {!! $error !!}
                                            @endforeach
                                        </p>
                                    </div>   
                                    @endif
                                    <!-- ===============================  Messagge  ================================ -->
                                    <!-- ================================ Messagge  ================================ -->
                                    <script>
                                        function validateForm() {
                                            var x = document.forms["Contact"]["Content"].value;
                                            if (x == null || x == "" || x.length > 50 ) {
                                                window.location.href = '{{ url('') }}';
                                                return false;
                                            }
                                        }
                                    </script>
                                    <!-- ================================ Messagge  ================================ -->
                                    <form method="post" action="{!! route('Contact.store') !!}"
                                          name="Contact" onsubmit="return validateForm()">
                                          {!! csrf_field() !!}
                                        <div class="row">
                                        <div class="col-12">
                                        <p>
                                        <textarea name='Message'  class="form-controllar" 
                                                  aria-required="true" rows="8" cols="45" 
                                                  placeholder="{!! __('main.Write_Messages') !!}">  
                                        </textarea>
                                        </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="read-more-wrap">
                                                <button type="submit" class="read-more">
                                                    <span>{!! __('main.Messages') !!}</span>
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                    </form>   
                                </div>
                                <!-- ================== #respond ==================================================== -->      
                            </div> 
                        </div>
                    </div>
                </main>
                <!--~./ ===================== end site main ========================================================= ~-->
            </div>
        </div>
    </div>
</div>
 <!--~./ ===================== end site main ===================== ~-->
<div class="frontpage-featured-posts featured-style-two mb-5">
<div id="featured-carousel" class="owl-carousel">
@foreach($spaces as $space)
        <!--~~~~~ ================ Start Featured Item ============ -->
        <article class="featured-item">
        <figure class="featured-media"> 
            <a href="{!! url('Membership') !!}/{!! $space->slug !!}" 
               class="featured-link"> 
            @if(isset($space->ImageUpload->filename))
            <img src="{!! asset($space->ImageUpload->filename) !!}">
            @else
            @endif 
            </a>
        </figure>
        <!--./ ================ featured-media ================== -->
        <div class="content-entry-wrap">
            <div class="entry-content">
                <h3 class="entry-title">
                 <a href="{!! url('Membership') !!}/{!! $space->slug !!}">
                    {!! $space->{'Title_'.$Locale} !!}
                </a>
                </h3>
            </div>
            <!--./ ======================= entry-content ======= -->
            <div class="entry-meta-content">
                <div class="entry-category">
                    <a> 
                        {!! $space->price !!}
                        {!! $space->map !!}
                    </a>
                </div>
            </div>
        </div>
    </article>
<!--~~~~~ ================ Start Featured Item ================ ~~~~~-->
@endforeach
</div>
</div>
</div>
@endsection
