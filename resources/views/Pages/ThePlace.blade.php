@extends('layouts.main')

@section('content')
<!-- =================================  LaravelLocalization ========================= -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- =================================  LaravelLocalization ========================= -->
<div class="site-content">
<div class="page-title-area text-white bg-image bg-overlay ptb-60" 
     style="background-image:url('{!! asset(option('coveruser')) !!}');"> 
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-header-content">
                <div class="page-header-caption">
                    <h1>{!! __('main.ThePlace') !!}</h1>
                </div>
                <div class="breadcrumb-area">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{!! url('') !!}">{!! __('main.Home') !!}</a></li>   
                        <li aria-current="page" class="breadcrumb-item active">{!! __('main.ThePlace') !!}</li>
                    </ol>
                </div>
            </div>
            <!--~~./ ==================== page-header-content =============== ~~-->
        </div>
    </div>
</div>
<!--~~./ ==================== end container ======================================= ~~-->
</div>
<!--~~./ ==================== end page title area ================================= ~~-->
<div class="main-wrapper ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <main class="site-main">
                    <div class="post single-post single-post-two">
                        <div class="post-header single-post-header">
                            <div class="content-entry-wrap">
                                <!--./ ================= Plans-Title ============================ -->
                                <h3 class="entry-title">
                                   {!! __('main.The_Floor_Plans') !!}
                                </h3>
                                <!--./ ================= Plans-Title ============================ -->
                                <p>{!! __('main.Golo_suitable') !!}</p> 
                            </div>
                            <!--./ ===================== content-entry-wrap ===================== -->
                        </div>
                        <!--./ ===================== content-entry-wrap ===================== -->
                        <div class="single-post-content">
                            <div class="entry-content">
                                <div class="row image-group">
                                    <div class="col-lg-6 col-md-6">
                                        <figure class="thumb">
                                            <img src="{!! asset('assets/images/map-1.jpg') !!}" alt="Img">
                                        </figure>
                                    </div>
                        <!--./ ===================== content-entry-wrap ===================== -->
                                    <div class="col-lg-6 col-md-6">
                                        <figure class="thumb">
                                            <img src="{!! asset('assets/images/map-2.jpg') !!}" alt="Img">
                                        </figure>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!--./ ===================== content-entry-wrap ===================== -->
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
<!--~./ end main wrapper ~--> 
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
        <!--./ ================ featured-media ================ -->
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
                <!--./ entry-category -->
            </div>
            <!--./ thumb-wrap -->
        </div>
        <!--./ content-entry-wrap -->
    </article>
    <!--./ end featured item -->
    @endforeach
    </div>
</div>
<div class="main-wrapper blog-style-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <main class="site-main">
                    <article class="post hentry post-list ptb-80 list-style-two">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="booking-card">
                                    <div class="booking-header">
                                        <h3><i class="fas fa-calendar-check"></i> Réservation rapide</h3>
                                    </div>

                                    @if(Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong><i class="fas fa-check-circle"></i></strong> {{ Session::get('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="register-prompt mb-4">
                                        <a href="/register" class="btn btn-outline-primary btn-block">
                                            <i class="fas fa-user-astronaut"></i> Pas encore inscrit ? Créez votre compte
                                        </a>
                                    </div>

                                    <form method="post" action="{{ route('contact.store') }}" name="Contact" class="booking-form" onsubmit="return validateForm()">
                                        @csrf
                                        <div class="form-group floating-label">
                                            <input type="text" class="form-control" name="name" required="">
                                            <label>Nom d'utilisateur</label>
                                        </div>
                                        
                                        <div class="form-group floating-label">
                                            <input type="email" class="form-control" name="mail" required="">
                                            <label>Adresse E-mail</label>
                                        </div>

                                        <div class="form-group floating-label">
                                            <input type="text" class="form-control" name="phone" required="">
                                            <label>Téléphone</label>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" id="Message" name="Message" rows="3" 
                                                    placeholder="Votre message (max 150 caractères)" maxlength="150" required=""></textarea>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label><i class="far fa-calendar-alt"></i> Date de début</label>
                                                <input type="date" class="form-control" name="datestart" required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label><i class="far fa-calendar-alt"></i> Date de fin</label>
                                                <input type="date" class="form-control" name="dateend" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control custom-select" id="Post_id" name="Post_id" required="">
                                                <option value="" disabled="" selected="">Sélectionnez un espace de travail</option>
                                                @foreach($spaces as $space)
                                                <option value="{{ $space->id }}">{{ $space->{'Title_'.$Locale} }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block btn-lg">
                                            <i class="fas fa-paper-plane"></i> Réserver maintenant
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="search-card">
                                    <form name="myForm" onsubmit="return validateForm2()" method="GET" action="/SearchSpace">
                                        <div class="search-wrapper">
                                            <input type="text" class="search-input" name="SearchSpace" 
                                                placeholder="Rechercher d'autres espaces de coworking">
                                            <button class="search-btn" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>

                                    <div class="info-card mt-4">
                                        <h3><i class="fas fa-info-circle"></i> Information</h3>
                                        <p>Nous sommes prêts à vous aider. Partagez vos informations de contact et notre équipe vous contactera rapidement.</p>
                                        <a href="/ThePlace" class="btn btn-outline-info btn-block">
                                            <i class="fas fa-star-half"></i> En savoir plus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
.booking-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    padding: 30px;
    margin-bottom: 30px;
}

.booking-header {
    text-align: center;
    margin-bottom: 30px;
}

.booking-form .form-control {
    border-radius: 8px;
    padding: 12px;
    border: 2px solid #eee;
    transition: all 0.3s;
}

.booking-form .form-control:focus {
    border-color: #E1B129;
    box-shadow: none;
}

.floating-label {
    position: relative;
    margin-bottom: 20px;
}

.floating-label label {
    position: absolute;
    top: -10px;
    left: 10px;
    background: white;
    padding: 0 5px;
    font-size: 12px;
    color: #666;
}

.search-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    padding: 30px;
}

.search-wrapper {
    display: flex;
    gap: 10px;
}

.search-input {
    flex: 1;
    border-radius: 8px;
    border: 2px solid #eee;
    padding: 15px;
}

.search-btn {
    background: #E1B129;
    color: white;
    border: none;
    border-radius: 8px;
    padding: 0 20px;
    transition: all 0.3s;
}

.search-btn:hover {
    background: #1c3464;
    transform: scale(1.05);
}

.info-card {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
}

.btn {
    transition: all 0.3s;
}

.btn:hover {
    transform: translateY(-2px);
}

.alert {
    border-radius: 8px;
    margin-bottom: 20px;
}
</style>

<script>
function validateForm() {
    var content = document.forms["Contact"]["Message"].value;
    if (content == null || content == "" || content.length > 150) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Le message est requis et doit faire moins de 150 caractères.'
        });
        return false;
    }
    return true;
}

function validateForm2() {
    var x = document.forms["myForm"]["SearchSpace"].value;
    if (x == null || x == "" || x.length > 30) {
        window.location.href = '/';
        return false;
    }
}
</script>