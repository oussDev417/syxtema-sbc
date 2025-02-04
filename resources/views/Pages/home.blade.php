@extends('layouts.main')

@section('content')
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!--********************************************************-->
<!--********************* SITE CONTENT *********************-->
<!--********************************************************-->
<div class="site-content">
<div class="frontpage-slider-posts bg-black">
<div class="slider-hero-post"> 
<article class="slider-item">
<!--./ =================== slider-thumb =================== -->
<figure class="slider-thumb">   
  <img src="{!! asset(option('settings')) !!}">
</figure>
<!--./ =================== slider-thumb =================== -->
<div class="content-entry-wrap">
<div class="container">
<div class="row justify-content-end">
<div class="col-lg-7 col-md-7">
<div class="content-entry-wrap-inner">
    <div class="entry-content">
        <h3 class="entry-title">
            {!! __('main.Hello_world') !!}
        </h3><!--./ entry-title -->
    </div><!--./ entry-content -->
    <div class="entry-meta-content">
        <div class="entry-category">
            <a class="cat">{!! __('main.Ceo_eynoDragon') !!}</a>
        </div>
        <!--./ entry-category -->
    </div>
    <!--./ entry-meta-content -->
</div>
</div>
</div>
</div><!--./ entry-meta-content -->
</div><!--./ content-entry-wrap -->
</article><!--./ slider-item --> 
</div><!--/.slider-hero-post --> 
</div>
<!--~./ =============== End slider posts =============== ~-->
<div class="main-wrapper blog-style-one">
<div class="container">
<div class="row">
<div class="col-lg-12">
<main class="site-main">
<article class="post hentry post-list ptb-80 list-style-two">
<div class="row align-items-center">
<div class="col-lg-6">
    <div class="entry-thumb">
        <!--./  ===================== thumb-wrap ===================== -->
        <figure class="thumb-wrap">
            <a href="{!! url('ThePlace') !!}">
             <img src="{!! asset(option('coveruser')) !!}">
            </a>
        </figure>
        <!--./ ===================== thumb-wrap ====================== -->
    </div>
</div>
<div class="col-lg-6">
    <div class="content-entry-wrap text-left">
        <!--./ ================ entry-title ================== -->
        <div class="entry-content">
            <h3 class="entry-title">
                {!! __('main.social_culture') !!}
            </h3>
        </div>
        <!--./ ================ entry-content ================ -->
        <div class="entry-summary"> 
           @if($Locale == 'fr')
           {{ option('Home_fr') }}
           @else
           {{ option('Home_en') }}
           @endif
            <p class="read-more-wrap">
                <p class="read-more-wrap">
                  <a href="{!! url('ThePlace') !!}" class="read-more p-20">
                    <i class="fas fa-star-half"></i> {!! __('main.Continue_Read') !!} 
                  </a>
                </p>
            </p>
        </div>
    </div>
    <!--./ =========== content-entry-wrap =========== -->
</div>
</div>
</article>
<!--~./ ============= end ================= ~-->
</main>
</div>
</div>
</div>
</div>
<div class="video-channels-posts-block bg-black ptb-80">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-header">
<h2 class="section-title">{!! __('main.FEATURES') !!}</h2>
<p>{!! __('main.We_Features') !!}</p></div>
<div class="row">

<div class="col-lg-2">
<article class="post hentry post-grid">
<div class="entry-thumb">
<figure class="thumb-wrap">
<a href="{!! url('ThePlace') !!}">
    <img src="{!! asset(option('coveruser')) !!}">
</a>
</figure>   
<!--./ thumb-wrap -->
</div>
<!--./ entry-thumb -->
<div class="content-entry-wrap">
<div class="entry-content">
<h3 class="entry-title text-white">
   <i class="fas fa-wifi"></i> {!! __('main.Fast_Internet') !!}
</h3>
<!--./ entry-title -->
</div>
<!--./ entry-content -->
</div>
<!--./ content-entry-wrap -->
</article>
</div>

<div class="col-lg-2">
<article class="post hentry post-grid">
<div class="entry-thumb">
<figure class="thumb-wrap">
<a href="{!! url('ThePlace') !!}">
    <img src="{!! asset(option('covermessage')) !!}">
</a>
</figure>   
<!--./ thumb-wrap -->
</div>
<!--./ entry-thumb -->
<div class="content-entry-wrap">
<div class="entry-content">
<h3 class="entry-title text-white">
   <i class="fas fa-headset"></i> {!! __('main.Room_Meets') !!}
</h3>
<!--./ entry-title -->
</div><!--./ entry-content -->
</div><!--./ content-entry-wrap -->
</article>
</div>
<div class="col-lg-2">
<article class="post hentry post-grid">
<div class="entry-thumb">
<figure class="thumb-wrap">
<a href="{!! url('ThePlace') !!}">
    <img src="{!! asset(option('coveradvertisement')) !!}">
</a>
</figure>   
<!--./ thumb-wrap -->
</div>
<!--./ entry-thumb -->
<div class="content-entry-wrap">
<div class="entry-content">
<h3 class="entry-title text-white">
   <i class="fas fa-car"></i> {!! __('main.Area_Parking') !!}
</h3>
<!--./ entry-title -->
</div><!--./ entry-content -->
</div><!--./ content-entry-wrap -->
</article>
</div>
<div class="col-lg-2">
<article class="post hentry post-grid">
<div class="entry-thumb">
<figure class="thumb-wrap">
<a href="{!! url('ThePlace') !!}">
    <img src="{!! asset(option('coveradvertisement')) !!}">
</a>
</figure>   
<!--./ thumb-wrap -->
</div>
<!--./ entry-thumb -->
<div class="content-entry-wrap">
<div class="entry-content">
<h3 class="entry-title text-white">
   <i class="fas fa-key"></i> {!! __('main.Lookers') !!}
</h3>
<!--./ entry-title -->
</div><!--./ entry-content -->
</div><!--./ content-entry-wrap -->
</article>
</div>
<div class="col-lg-2">
<article class="post hentry post-grid">
<div class="entry-thumb">
<figure class="thumb-wrap">
<a href="{!! url('ThePlace') !!}">
    <img src="{!! asset(option('coverinstagram')) !!}">
</a>
</figure>   
<!--./ thumb-wrap -->
</div>
<!--./ entry-thumb -->
<div class="content-entry-wrap">
<div class="entry-content">
<h3 class="entry-title text-white">
   <i class="fas fa-book"></i> {!! __('main.Books') !!}
</h3>
<!--./ entry-title -->
</div><!--./ entry-content -->
</div><!--./ content-entry-wrap -->
</article>
</div>
<div class="col-lg-2">
<article class="post hentry post-grid">
<div class="entry-thumb">
<figure class="thumb-wrap">
<a href="{!! url('ThePlace') !!}">
    <img src="{!! asset(option('settings')) !!}">
</a>
</figure>   
<!--./ thumb-wrap -->
</div>
<!--./ entry-thumb -->
<div class="content-entry-wrap">
<div class="entry-content">
<h3 class="entry-title text-white">
   <i class="fas fa-coffee"></i> {!! __('main.Restaurant') !!}
</h3>
<!--./ entry-title -->
</div>
<!--./ entry-content -->
</div>
<!--./ content-entry-wrap -->
</article>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="frontpage-featured-posts featured-style-two">
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
<!--~~~~~ ================ Start Featured Item ================ ~~~~~-->
@endforeach
</div>
</div>

<div class="advantages-overlay py-5" style="background: linear-gradient(135deg, #2A2D3E 0%, #1c3464 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 text-white mb-3" style="font-weight: 700;">Services Premium</h2>
            <p class="lead" style="color: #E1B129;">Une expérience de coworking exceptionnelle</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="advantage-card">
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-white">Avantages EIR</h3>
                    <ul class="feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Networking professionnel
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Événements VIP
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Support dédié
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="advantage-card featured">
                    <div class="card-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="text-white">Programme Mentorat</h3>
                    <ul class="feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Accompagnement expert
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Sessions stratégiques
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Suivi personnalisé
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="advantage-card">
                    <div class="card-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-white">Innovation</h3>
                    <ul class="feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Brainstorming créatif
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Projets collaboratifs
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Ressources partagées
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start About Us Area
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="about-us-area">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <!--~./ ============== about-us-content ============== ~-->
            <div class="about-us-content">
                <h3 class="name">{!! __('main.BOOK_SPACE') !!}</h3>
            </div>
            <!--~./ ============== about-us-content ============== ~-->
        </div>
        <div class="col-lg-6">
            <div class="about-thumb text-right">
                <p class="read-more-wrap">
                  <a href="{!! url('ThePlace') !!}" class="read-more p-20">
                    <i class="fas fa-star-half"></i> {!! __('main.Booking_Now') !!}
                  </a>
                </p>
            </div>
            <!--~./ ==================== about-thumb ============= ~-->
        </div>
    </div>
</div>
</div>

<style>
.advantage-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 2rem;
    color: white;
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.advantage-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

.advantage-card.featured {
    background: rgba(225, 177, 41, 0.15);
    border: 1px solid #E1B129;
}

.card-icon {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
    color: #E1B129;
}

.advantage-card h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
}

.feature-list {
    list-style: none;
    padding: 0;
}

.feature-list li {
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.feature-list i {
    color: #E1B129;
}
</style>
<div class="testimonials-section py-5" style="background: linear-gradient(135deg, #1c3464 0%, #E1B129 200%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 text-white mb-3" style="font-weight: 700;">Témoignages</h2>
            <p class="lead" style="color: #E1B129;">L'expérience de notre communauté</p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card h-100" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(10px); border-radius: 20px; padding: 2rem; border: 1px solid rgba(255,255,255,0.1);">
                    <div class="testimonial-header d-flex align-items-center mb-4">
                        <div class="avatar me-3">
                            <img src="https://via.placeholder.com/60" class="rounded-circle border border-2 border-warning" alt="Avatar">
                        </div>
                        <div>
                            <h5 class="mb-1 text-white">Sophie Martin</h5>
                            <p class="mb-0" style="color: #E1B129;">Entrepreneur Tech</p>
                        </div>
                    </div>
                    <p class="testimonial-text text-white opacity-75">"L'environnement de travail est exceptionnel. J'ai pu développer mon réseau et faire grandir mon entreprise grâce à la communauté dynamique."</p>
                    <div class="testimonial-rating" style="color: #E1B129;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card h-100" style="background: rgba(225,177,41,0.1); backdrop-filter: blur(10px); border-radius: 20px; padding: 2rem; border: 1px solid #E1B129;">
                    <div class="testimonial-header d-flex align-items-center mb-4">
                        <div class="avatar me-3">
                            <img src="https://via.placeholder.com/60" class="rounded-circle border border-2 border-warning" alt="Avatar">
                        </div>
                        <div>
                            <h5 class="mb-1 text-white">Marc Dubois</h5>
                            <p class="mb-0" style="color: #E1B129;">Freelance Designer</p>
                        </div>
                    </div>
                    <p class="testimonial-text text-white opacity-75">"Les installations sont modernes et le support est toujours disponible. C'est l'endroit parfait pour les professionnels créatifs."</p>
                    <div class="testimonial-rating" style="color: #E1B129;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card h-100" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(10px); border-radius: 20px; padding: 2rem; border: 1px solid rgba(255,255,255,0.1);">
                    <div class="testimonial-header d-flex align-items-center mb-4">
                        <div class="avatar me-3">
                            <img src="https://via.placeholder.com/60" class="rounded-circle border border-2 border-warning" alt="Avatar">
                        </div>
                        <div>
                            <h5 class="mb-1 text-white">Julie Leroux</h5>
                            <p class="mb-0" style="color: #E1B129;">Startup Founder</p>
                        </div>
                    </div>
                    <p class="testimonial-text text-white opacity-75">"Le programme de mentorat a été déterminant pour le succès de ma startup. Je recommande vivement cet espace de coworking."</p>
                    <div class="testimonial-rating" style="color: #E1B129;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- =============================  content ========================= -->
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
@endsection
