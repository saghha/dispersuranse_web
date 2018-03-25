@extends('layouts.default_dispers')
@section('content')


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>Welcome to Avilon</h2>
      <p>We are team of talanted designers making websites with Bootstrap</p>
      
      <div class="row">
        <div class="col-sm-12"> 
          <div class="timer wow fadeInUp" style="color:#fff;">
            <div class="days-wrapper">
                <span class="days"></span> <br>days
            </div> 
            <span class="slash">/</span> 
            <div class="hours-wrapper">
                <span class="hours"></span> <br>hours
            </div> 
            <span class="slash">/</span> 
            <div class="minutes-wrapper">
                <span class="minutes"></span> <br>minutes
            </div> 
            <span class="slash">/</span> 
            <div class="seconds-wrapper">
                <span class="seconds"></span> <br>seconds
            </div>
            <div class="wow fadeInDown animated" style="padding-top:50px;">
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    <!-- <div class="product-screens">

      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <img src="img/product-screen-1.png" alt="">
      </div>

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="img/product-screen-2.png" alt="">
      </div>

      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
        <img src="img/product-screen-3.png" alt="">
      </div>

    </div> -->

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    @include('home.aboutUs')

    <!--==========================
      Product Featuress Section
    ============================-->
    @include('home.features')
    @include('home.timeline')
    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    

    

    <!--==========================
      More Features Section
    ============================-->
    

    <!--==========================
      Clients
    ============================-->
    

    <!--==========================
      Our Team Section
    ============================-->
    @include('home.team')

    <!--==========================
      Gallery Section
    ============================-->
    

    <!--==========================
      Contact Section
    ============================-->
    @include('home.contact')

  </main>
@endsection