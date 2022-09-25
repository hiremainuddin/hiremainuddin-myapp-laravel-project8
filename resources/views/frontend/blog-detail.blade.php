<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="I am full stack developer">
    <meta name="keywords" content="web designer">
    <meta name="author" content="Mainuddin">
  <!-- Page Title -->
  <title>Hiremaiuddin</title>
  <!-- Google Fonts css-->
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash%7CRoboto:300,400,400i,500,500i,700,700i,900" rel="stylesheet">
  <!-- Bootstrap css -->
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
  <!-- Font Awesome icon css-->
  <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" media="screen">
  <link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet" media="screen">
  <!-- Swiper's CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css')}}">
  <!-- Animated css -->
  <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
  <!-- Magnific Popup CSS -->
  <link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">
  <!-- Animation Headline CSS -->
  <link href="{{asset('frontend/css/animation-headline.css')}}" rel="stylesheet">
  <!-- Slick nav css -->
  <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css')}}">
  <!-- Main custom css -->
  <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet" media="screen">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#main-navbar" data-offset="75">
  
  <!-- Preloader starts -->
  <div class="preloader">
    <div class="loader">
      <div class="diamond"></div>
      <div class="diamond"></div>
      <div class="diamond"></div>
    </div>
  </div>
  <!-- Preloader Ends -->
  
  <!-- Header Section Start -->
  <header class="header">
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="main-navbar">
      <div class="container">
        <!-- Navbar Brand start -->
        <a class="navbar-brand" href="#">
          <h1><span>Hire</span> Mainuddin</h1>
        </a>
        <!-- Navbar Brand end -->
        
        <!-- Navigation Starts -->
        <ul class="navbar-nav ml-auto" id="main-menu">
          <li class="nav-item"><a class="nav-link active" href="{{route('/')}}#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('/')}}#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('/')}}#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('/')}}#resume">Resume</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('/')}}#portfolio">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('/')}}#pricing">Pricing</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('/')}}#blog">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('/')}}#contact">Contact</a></li>
        </ul>
        <!-- Navigation Ends -->        
        
        <div class="navbar-toggle"></div>
        <div id="responsive-menu"></div>
      </div>
    </nav>  
  </header>
  <!-- Header Section End -->

  <!-- Banner Slider Section starts -->
  <div class="banner" style="background: url({{ asset('frontend/images/blog-detail.jpg)')}} no-repeat top center; background-size: cover;" id="home">
    <div class="container">
      <div class="text-center text-white">
      <h1>{{ $blog->title ?? ''}}</h1>
      </div>
    </div>
  </div>
  <!-- Banner Slider Section ends -->
  

  

  
  <!-- My Resume Section Starts -->
 <section class="latest-blog" id="blog">
  <div class="container">
    <div class="row align-items-center justify-content-center">
     <div class="col-sm-8 text-center">
       <article>
        {{ $blog->description ?? ''}}
       </article>
        <div class="blog-footer">
          <ul>
              <li><i class="fa fa-calendar"></i>{{ Carbon\Carbon::parse($blog->created_at)->format('Y-m-d') ?? ''}}</li>
              <li><i class="fa fa-tag"></i>Technology</li>
          </ul>
        </div>
     </div>
    </div>
  </div>
 </section>
  <!-- My Resume Section Ends -->
  
  
  <!-- Newsletter Section Starts -->
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="newsletter-content">
            <h3>Sign up for Newsletter</h3>
            <p>Join our subscribers list to get the latest news updates and special offers.</p>
          </div>
          
          <!-- Newsletter Form start -->
          <div class="newsletter-form wow fadeInUp">
            <form action="#" class="form-inline">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your email address">
                <button type="submit" class="btn-subscribe"><i class="fa fa-paper-plane-o"></i></button>
              </div>
            </form>
           </div>
          <!-- Newsletter Form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- Newsletter Section Ends -->
  
  <!-- Blog Section Starts -->
  <section class="latest-blog" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Section title start -->
          <div class="section-title">
            <h2>Latest News</h2>
            <p>Latest Post - site making related posts</p>
          </div>
          <!-- Section title end -->
        </div>
      </div>
      


@php
    $blogs = DB::table('blogs')->get();
@endphp 

      <div class="row">
        @foreach($blogs as $blogItem)
        <div class="col-md-4">
          <!-- Blog Single Start -->
          <div class="blog-single wow fadeInUp" data-wow-delay="0.3s">
            <div class="blog-header">
              <figure>
                <img src="{{ asset($blogItem->img) }}" alt="{{$blogItem->img}}" />
              </figure>
              
              <div class="blog-header-overlay">
                <a href="{{ url('blog-detail/'.$blogItem->id ?? '')}}"><i class="fa fa-link"></i></a>
              </div>
            </div>
            
            <div class="blog-body">
              <h2>{{ $blog->title ?? ''}}</h2>
              <p>{{ Str::limit($blogItem->description, 120) ?? '' }}</p>
            </div>
            
            <div class="blog-footer">
              <ul>
                  <li><i class="fa fa-calendar"></i>{{ Carbon\Carbon::parse($blogItem->created_at)->format('Y-m-d') ?? ''}}</li>
                  <li><i class="fa fa-tag"></i>Technology</li>
              </ul>
            </div>
          </div>
          <!-- Blog Single End -->
        </div>
        @endforeach()
      </div>
    </div>
  </section>
  <!-- Blog Section Ends -->
  
  
@php
   $brands = App\Models\Clients::all();
@endphp
  <!-- Brand Section Starts -->
  <div class="brand-sponser">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
              <!-- Brand slide start -->
              @foreach($brands as $brand)
              <div class="swiper-slide">
                <div class="brand-slide">
                  <img src="{{ asset($brand->logo) }}" alt="{{$brand->logo}}" />
                </div>
              </div>
              @endforeach
              <!-- Brand slide end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand Section Ends -->
  
  <!-- Contact us Section Starts -->
  <section class="contactus" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Section title start -->
          <div class="section-title">
            <h2>Get in touch</h2>
            <p>Feel free to drop me a line - Contact us</p>
          </div>
          <!-- Section title end -->
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-8 offset-md-2">
            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                    @endif
          <!-- Contact Form start -->
          <div class="contact-form">
            <form id="contactForm" action="{{route("store-message")}}" method="POST">
                @csrf
              <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                  <input type="text" class="form-control" name="name" placeholder="Your Name">
                  @if($errors->has('name'))
                                    <small class="text-danger">{{$errors->first('name')}}</small>
                                    @endif
                </div>
                
                <div class="form-group col-md-6 col-sm-6">
                  <input type="email" name="email" class="form-control" placeholder="Your Email Address">
                  @if($errors->has('email'))
                                    <small class="text-danger">{{$errors->first('email')}}</small>
                                    @endif
                </div>
                
                <div class="form-group col-md-12 col-sm-12">
                  <input type="text" name="subject" class="form-control" placeholder="Subject (Silver Service)">
                </div>
                
                <div class="form-group col-md-12 col-sm-12">
                  <textarea rows="4"  name="message" class="form-control" placeholder="How can i help you?"></textarea>
                   @if($errors->has('message'))
                                     <small class="text-danger">{{$errors->first('message')}}</small>
                                     @endif
                </div>
                
                <div class="col-md-12 col-sm-12 text-center">
                  <button type="submit" class="btn-contact">Contact Now</button>
                </div>
              </div>
            </form>
          </div>
          <!-- Contact Form end -->
        </div>
      </div>
    </div>
  </section>
  <!-- Contact us Section Ends -->
  
  <!-- Contact Information Section Starts -->
  <div class="contact-information">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <!-- Contact info single start -->
          <div class="contact-info-single wow fadeInUp" data-wow-delay="0.3s">
            <h3>Address</h3>
            <p>Uthura, Bhaluka <br />Mymensingh, Bangladesh.</p>
          </div>
          <!-- Contact info single end -->
        </div>
        
        <div class="col-lg-4">
          <!-- Contact info single start -->
          <div class="contact-info-single wow fadeInUp" data-wow-delay="0.6s">
            <h3>Phone No.</h3>
            <p>+8801775864306 <br />+8801924268292 </p>
          </div>
          <!-- Contact info single end -->
        </div>
        
        <div class="col-lg-4">
          <!-- Contact info single start -->
          <div class="contact-info-single wow fadeInUp" data-wow-delay="0.9s">
            <h3>Email</h3>
            <p>contact@hiremainuddin.com <br />hiremainuddin@gmail.com</p>
          </div>
          <!-- Contact info single end -->
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Information Section Ends -->
  
  <!-- Footer Section starts -->
  <footer class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Footer Logo start -->
          <div class="footer-logo">
            <h1><span>Hire </span> Mainuddin</h1>
          </div>
          <!-- Footer Logo end -->
          
          <!-- Footer About start -->
          <div class="footer-about">
            <p>I am a PHP Laravel and WordPress expert and working with these since 2019. I have extensive knowledge about branding through website design and development, theme customization, and anything else you need to make your business shine online!</p>
          </div>
          <!-- Footer About end -->
          
          <!-- Footer Social Link start -->
          <div class="footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div>
          <!-- Footer Social Link end -->
          
          <!-- Footer Copyright start -->
          <div class="footer-copyright">
            <p>Copyright &copy; Untitled. All rights reserved. Design By <a href="https://hiremainuddin.com/" target="_blank">Mainuddin Designer And Developer</a>
          </div>
          <!-- Footer Copyright end -->
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section Ends -->
  
  <!-- Jquery Library File -->
  <script src="{{ asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
  <!-- Bootstrap js file -->
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <!-- Wow js file -->
  <script src="{{ asset('frontend/js/wow.js')}}"></script>
  <!-- Swiper Carousel js file -->
  <script src="{{ asset('frontend/js/swiper.min.js')}}"></script>
  <!-- Counterup js file -->
  <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
  <!-- Isotop js file -->
  <script src="{{ asset('frontend/js/isotope.min.js')}}"></script>
  <!-- Magnific Popup core JS file -->
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <!-- Slick Nav js file -->
  <script src="{{ asset('frontend/js/jquery.slicknav.js')}}"></script>
  <!-- SmoothScroll -->
  <script src="{{ asset('frontend/js/SmoothScroll.js')}}"></script>
  <!-- Animated Headline js file -->
  <script src="{{ asset('frontend/js/animation-headline.js')}}"></script>
    <!-- Main Custom js file -->
  <script src="{{ asset('frontend/js/function.js')}}"></script>
</body>
</html>