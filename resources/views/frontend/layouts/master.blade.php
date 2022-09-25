<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> @yield('title') </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="hiremainuddin">
  <meta content="" name="hiremainuddin">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="{{ url('frontend/img/favicon.ico')}}" rel="icon">
  <link href="{{ url('frontend/img/favicon.ico')}}" rel="apple-touch-icon">
  <!-- Bootstrap CSS File -->
  <link href="{{url('frontend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="{{url('frontend/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
  <link href="{{url('frontend/css/aos.css')}}" rel="stylesheet">

</style>
@yield('style')
</head>

<body id="page-top">

  {{-- NAVBAR --}}
  @include('frontend/layouts/navigation')

  {{-- MAIN_CONTENT --}}
  @yield('main-content')

  {{-- FOOTER --}}
  @include('frontend/layouts/footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{url('frontend/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('frontend/lib/popper/popper.min.js')}}"></script>
  <script src="{{url('frontend/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{url('frontend/lib/easing/easing.min.js')}}"></script>
  <script src="{{url('frontend/lib/counterup/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('frontend/lib/counterup/jquery.counterup.js')}}"></script>
  <script src="{{url('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('frontend/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{url('frontend/lib/typed/typed.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('frontend/contactform/contactform.js')}}"></script>
  <!-- Template Main Javascript File -->
  <script src="{{url('frontend/js/main.js')}}"></script>
  <script src="{{url('frontend/js/aos.js')}}"></script>

  <script>
    AOS.init();
 </script>

  @yield('script')
</body>
</html>
