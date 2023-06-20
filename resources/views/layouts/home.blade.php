<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('front/assets/web/assets/mobirise-icons2/mobirise2.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/bootstrap/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/bootstrap/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/parallax/jarallax.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/dropdown/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/socicon/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/theme/css/style.css') }}">
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,300i,400i,500i,600i,700i,800i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,300i,400i,500i,600i,700i,800i&display=swap"></noscript>
        <link rel="preload" as="style" href="{{ asset('front/assets/mobirise/css/mbr-additional.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/mobirise/css/mbr-additional.css') }}" type="text/css">


    </head>
    <body>
       
    @yield('content')
        <script src="{{ asset('front/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>  
<script src="{{ asset('front/assets/parallax/jarallax.js') }}"></script>  
<script src="{{ asset('front/assets/smoothscroll/smooth-scroll.js') }}"></script> 
 <script src="{{ asset('front/assets/ytplayer/index.js') }}"></script>  
 <script src="{{ asset('front/assets/dropdown/js/navbar-dropdown.js') }}"></script> 
  <script src="{{ asset('front/assets/playervimeo/vimeo_player.js') }}"></script> 
   <script src="{{ asset('front/assets/theme/js/script.js') }}"></script>  

    </body>
</html>
