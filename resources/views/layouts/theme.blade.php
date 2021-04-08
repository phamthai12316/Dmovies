<!--Theme Name -> Dark Movies  -->
<!--Coded By   -> justin coder -->
<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>@yield('title')</title>
       <link rel="icon" type="image/png" href="{{ asset('/images/icons/darkmovies.png') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('/css/stellar-font-awesome.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('/css/stellar.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('/css/swiper.min.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.min.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.mCustomScrollbar.css') }}" />
       <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.min.css') }}" />
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css"></head>
       <!-- head section close. all css in /public/css folder -->
    <body style="font-family: Quicksand;" >
    <nav class="navbar navbar-light navbar-expand-lg fixed-top clean-navbar" id="navhead">
    <div class="container"><a class="navbar-brand logo" href="{{ URL::to('/') }}" data-bs-hover-animate="shake" style="font-family:'Abril Fatface', cursive;color:#ffffff;">
                           <i class="fa fa-headphones" style="font-size:31px;color:rgb(255,0,0);"></i>&nbsp; DARK Movies</a>
                           <button class="navbar-toggler"  data-toggle="collapse" data-target="#navcol-1" style="background-color:#232222;">
                           <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color:#232323;"></span>
                           </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto"></ul>
                <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ URL::to('/') }}"  data-bs-hover-animate="flash" style="color:#ffffff;"> HOME </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ URL::to('/about') }}"  data-bs-hover-animate="flash" style="color:#ffffff;"> ABOUT US </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ URL::to('/movies') }}"  data-bs-hover-animate="flash" style="color:#ffffff;"> MOVIES </a></li></ul>
                <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ URL::to('/blog/posts') }}" data-bs-hover-animate="flash" style="color:#ffffff;"> Blog</a></li></ul>
                <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ URL::to('/contact') }}" data-bs-hover-animate="flash" style="color:#ffffff;"> CONTACT US </a></li>
                </ul></div></div></nav>
    <main class="page contact-us-page" style="height:auto;">
        <div class="container" id="info-col">
            <div class="row flex-row info-row">
                <div class="col-3 col-md-3 offset-0 m-auto" data-bs-hover-animate="bounce" id="info-col-box">
                <img class="float-left" src="{{ URL::to('images/icons/placeholder.png') }}" style="padding:25px;padding-left:25px;padding-right:7px;">
                <p style="font-family:'Abril Fatface', cursive;padding-top:24px;margin-bottom:0px;">Website Street 2019</p>
                <p style="font-family:'Abhaya Libre', serif;color:rgb(54,54,54);font-size:20px;margin:0px;">Denver, USA</p></div>
                <div class="col-3 col-md-3 offset-0 m-auto" data-bs-hover-animate="bounce" id="info-col-box">
                <img class="float-left" src="{{ URL::to('images/icons/smartphone.png') }}" style="padding:25px;padding-left:25px;padding-right:5px;">
                <p style="font-family:'Abril Fatface', cursive;padding-top:24px;margin-bottom:0px;">+91 9876543210</p>
                <p style="font-family:'Abhaya Libre', serif;color:rgb(54,54,54);font-size:20px;margin:0px;">&nbsp; Call us now!</p></div>
                <div class="col-3 col-md-3 offset-0 m-auto" data-bs-hover-animate="bounce" id="info-col-box">
                <img class="float-left" src="{{ URL::to('images/icons/email.png') }}" style="padding:25px;padding-left:25px;padding-right:10px;">
                <p style="font-family:'Abril Fatface', cursive;padding-top:24px;margin-bottom:0px;">Email@gmail.com</p>
                <p style="font-family:'Abhaya Libre', serif;color:rgb(54,54,54);font-size:20px;margin:0px;">Mon - Set 8:00-19:00</p></div>
                <div class="col-3 col-md-3 offset-0 m-auto" data-bs-hover-animate="bounce" id="info-col-box">
                <img class="float-left" src="{{ URL::to('images/icons/whatsapp-logo.png') }}" style="padding:25px;padding-left:25px;padding-right:5px;">
                <p style="font-family:'Abril Fatface', cursive;padding-top:24px;margin-bottom:0px;">+91 999-888-777</p>
                <p style="font-family:'Abhaya Libre', serif;color:rgb(54,54,54);font-size:20px;margin:0px;">&nbsp;Mon - Set 8:00-8:00</p>
                </div>
            </div>
        </div></main>
    <div class="row block-border" id="bborder">
<div class="col d-md-none d-lg-none" style="background-color:#000000;height:45px;"></div></div>
@yield('content')
<footer class="page-footer dark" style="background-color:rgb(10,10,10);">
        <div class="container" style="height:auto;">
             <div class="row">
               <!-- info container -->
                 <div class="col-md-3 mx-auto">
                   <!-- info card -->
                      <div class="card-body">
                      <div class="float-left" id="ftbox" style="width:280px;">
                      <h5 style="padding-right:10px;padding-left:10px;">
                      <i class="fa fa-headphones rubberBand animated infinite" style="font-size:30px;color:rgb(255,0,0);"></i>&nbsp; DARK MASK
                      </h5>
                      <!-- info block-->
                      <div>
                      <p class="text-justify" style="color:rgb(255,255,255);font-family:'Abhaya Libre', serif;width:auto;padding-right:20px;">
                      The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from
                      de Finibus Bonorum et Malorum.<br>
                      </p></div>
                      <!-- End info block  -->
                      </div>
                      </div>
                  <!-- End info Card -->
                </div>
            <!-- End info container  -->
  <!-- List page links -->
        <div class="col-md-3 mx-auto" style="padding-left:10px;">
             <div class="card-body">
                <h5 style="font-family:'Abhaya Libre', serif;">About us</h5>
                  <ul style="font-family:'Abhaya Libre', serif;">
                  <li data-bs-hover-animate="pulse"><a href="#">Company Information</a></li>
                  <li data-bs-hover-animate="pulse"><a href="{{ URL::to('contact') }}">Contact us</a></li>
                  <li data-bs-hover-animate="pulse"><a href="{{ URL::to('blog/posts') }}">Blog</a></li>
                  <li data-bs-hover-animate="pulse"><a href="#">Services</a></li></ul></div></div>
                  <div class="col-md-3 mx-auto"  >
                  <div class="card-body">
                  <h5 style="font-family:'Abhaya Libre', serif;">Support</h5>
                  <ul style="font-family:'Abhaya Libre', serif;">
                  <li data-bs-hover-animate="pulse"><a href="#">FAQ</a></li>
                  <li data-bs-hover-animate="pulse"><a href="#">Help desk</a></li>
                  <li data-bs-hover-animate="pulse"><a href="#">Forums</a></li>
                 </ul>
             </div>
       </div>
 <!-- End List page links -->
                    <div class="col-md-3 mx-auto">
                    <div class="card-body">
                    <div class="float-left" data-bs-hover-animate="bounce" style="width:250px;height:250px;">
                    <img class="float-left ad300x250" src="{{ URL::to('images/ads/ads.png') }}" style="width:300px;height:250px;">
                    
                    </div></div></div></div></div>
                    <div id="footer-box" class="footer-copyright">
                    <p style="font-family:Amiri, serif;color:rgb(255,253,253);">© 2019 Copyright Text</p></div>


</footer>
                   <script type="text/javascript" src="{{ asset('/js/videoPlayer.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/iphone-inline-video.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/Playlist.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/videoPlayer.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/swiper.min.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/script.min.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/my.js') }}"></script>
                   <script type="text/javascript" src="{{ asset('/js/jquery.mCustomScrollbar.js') }}"></script>
                   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
                   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                   <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
                   <script src="https://player.vimeo.com/api/player.js"></script>
                   <!-- slider script  -->
                   <script>
                    var swiper = new Swiper('.swiper-container', {
                        effect: 'coverflow',
                        grabCursor: true,
                        centeredSlides: true,
                        slidesPerView: 'auto',
                        coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 5, // slider value change.
                        slideShadows: true,
                        },
                        pagination: {
                             el: '.swiper-pagination',
                        },
                        loop: true,
                        autoplay:true
                    });
                  </script>
                  <!-- End slider -->
        </body>
</html>
