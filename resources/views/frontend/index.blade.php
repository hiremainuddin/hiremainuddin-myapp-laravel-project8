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
					<li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
					<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
					<li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
				</ul>
				<!-- Navigation Ends -->				
				
				<div class="navbar-toggle"></div>
				<div id="responsive-menu"></div>
			</div>
		</nav>	
	</header>
	<!-- Header Section End -->
	
	<!-- Banner Slider Section starts -->
	<div class="banner" style="background: url({{ asset('frontend/images/banner.jpg)')}} no-repeat top center;" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- Banner Content Start -->
					<div class="banner-content">
						<h2 class="cd-headline clip">
							<span class="before-heading">Hi There! I'm </span>
							<span class="cd-words-wrapper">
								<b class="is-visible">UI/UX Designer</b>
								<b>Full Stack Developer</b>
							</span>
						</h2>
						<p>I am a PHP Laravel and WordPress expert and working with these since 2019. I have extensive knowledge about branding through website design and development.</p>
						
						<a href="{{ route('download')}}" class="btn-download">Download CV</a>
					</div>
					<!-- Banner Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Slider Section ends -->
	
	<!-- About us Section Starts -->
	@php
     $users = DB::table('users')->first();
    @endphp
	<section class="about-us" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2>About Me</h2>
						<p>Professional Profile - There Is All About Me</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<!-- About image start -->
					<div class="about-image wow fadeInLeft" data-wow-delay="0.3s">
						<img src="{{asset($users->image ?? '')}}" alt="" />
					</div>
					<!-- About image end -->
				</div>
				
				<div class="col-lg-8">
					<!-- About Content start -->
					<div class="about-content wow fadeInUp" data-wow-delay="0.8s">
						<h3>{{$users->name ?? ''}}</h3>
						<p>{{$users->description ?? ''}}</p>
						<p>Mine aim is to provide my customers exactly what they want and guide them throughout the process. My top priority is to
						 provide high-quality services with 100% satisfaction. Lets get in touch and start working on your dream website!</p>
						<ul>
							<li><i class="flaticon-calendar"></i><b>Date of birth:</b> 6 june 2001</li>
							<li><i class="flaticon-flag"></i><b>Nationality:</b> Bangladeshi</li>
							<li><i class="flaticon-freelance"></i><b>Freelance:</b> Available</li>
							<li><i class="flaticon-phone-call"></i><b>Phone:</b> +8801775864306</li>
							<li><i class="flaticon-placeholder"></i><b>Address:</b> Mymensingh, Bangladesh</li>
							<li><i class="flaticon-email"></i><b>Email:</b> hiremainuddin@gmail.com</li>
							<li><i class="flaticon-translation"></i><b>Spoken Langages:</b> Hindi - English - Arabic</li>
							<li><i class="flaticon-skype"></i><b>Skype:</b> Not Available</li>
						</ul>
					</div>
					<!-- About Content End -->
				</div>
			</div>
		</div>
	</section>
	<!-- About us Section Ends -->
	
	<!-- Services Section Starts -->
	<section class="services" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2>My Services</h2>
						<p>Creative service that I Offered</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>
    @php
     $service = DB::table('services')->get();
    @endphp
			<div class="row">
			  @foreach($service as $data)
				<div class="col-md-4">
					<!-- Service Single Start -->
					<div class="service-single wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-box">
							<i class="{{ $data->icon ?? ''}}"></i>
						</div>
						<h3>{{ $data->title ?? ''}}</h3>
						<p>{{ $data->description }}</p>
					</div>
					<!-- Service Single End -->
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Services Section Ends -->
	
	<!-- My Resume Section Starts -->
	<section class="my-resume" id="resume">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2>My Skills &  Facts</h2>
						<p>Skills &  Facts </p>
					</div>
					<!-- Section title end -->
				</div>
			</div>
			

			
			<div class="row">
				<div class="col-md-6">
					<div class="skill">
						<h3 class="sub-title"><i class="fa fa-star-o"></i>My Skills</h3>
						
						<!-- Skill Content Start -->
						<div class="skill-content">
							<div class="row">
								<div class="col-md-6">
									<!-- Skill Single Start -->
									<div class="skill-single">
										<h5>HTML 5 / CSS 3</h5>
										<div class="skill-ratting">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<!-- Skill Single End -->
								</div>
								
								<div class="col-md-6">
									<!-- Skill Single Start -->
									<div class="skill-single">
										<h5>Bootstrap 4/5</h5>
										<div class="skill-ratting">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<!-- Skill Single End -->
								</div>
								
								<div class="col-md-6">
									<!-- Skill Single Start -->
									<div class="skill-single">
										<h5>PHP / Laravel Framework</h5>
										<div class="skill-ratting">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<!-- Skill Single End -->
								</div>
								
								<div class="col-md-6">
									<!-- Skill Single Start -->
									<div class="skill-single">
										<h5>WordPress / Plugin </h5>
										<div class="skill-ratting">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<!-- Skill Single End -->
								</div>
								
								<div class="col-md-6">
									<!-- Skill Single Start -->
									<div class="skill-single">
										<h5>JavaScript / J-Query</h5>
										<div class="skill-ratting">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<!-- Skill Single End -->
								</div>
								
								<div class="col-md-6">
									<!-- Skill Single Start -->
									<div class="skill-single">
										<h5>MySql Database</h5>
										<div class="skill-ratting">
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-half-o"></i>
										</div>
									</div>
									<!-- Skill Single End -->
								</div>
							</div>
						</div>
						<!-- Skill Content End -->
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="counter-stats">
						<h3 class="sub-title"><i class="fa fa-heart"></i>Fun Facts</h3>
						<div class="counter-content">
							<div class="row">
								<div class="col-md-6">
									<!-- Counter Single Start -->
									<div class="counter-single">
										<div class="icon-box">
											<i class="flaticon-employee"></i>
										</div>
										<h4 class="counter">12</h4>
										<p>Happy Clients</p>
									</div>
									<!-- Counter Single End -->
								</div>
								
								<div class="col-md-6">
									<!-- Counter Single Start -->
									<div class="counter-single">
										<div class="icon-box">
											<i class="flaticon-trophy"></i>
										</div>
										<h4 class="counter">0</h4>
										<p>Awards Achieved</p>
									</div>
									<!-- Counter Single End -->
								</div>
								
								<div class="col-md-6">
									<!-- Counter Single Start -->
									<div class="counter-single">
										<div class="icon-box">
											<i class="flaticon-award"></i>
										</div>
										<h4 class="counter">12</h4>
										<p>Projects Done</p>
									</div>
									<!-- Counter Single End -->
								</div>
								
								<div class="col-md-6">
									<!-- Counter Single Start -->
									<div class="counter-single">
										<div class="icon-box">
											<i class="flaticon-customer"></i>
										</div>
										<h4 class="counter">10</h4>
										<p>User Rattings</p>
									</div>
									<!-- Counter Single End -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- My Resume Section Ends -->
	
	<!-- Portfolio Section Starts -->
	<section class="portfolio" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2>Portfolio</h2>
						<p>See My Works - Web Design And UI/UX Design</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>
			

@php
$projects = App\Models\Project::where('status', '=', 1)->get();
@endphp
			<div class="row portfolio-boxes">
				<!-- Single Portfolio starts -->
				<?php $a = 1; ?>
				 @foreach($projects as $project)
				<div class="col-md-3 col-sm-6 col-xs-12 portfolio-box designing">
					<div class="single-portfolio">
						<a href="#pid{{ $project->id}}"  class="has-popup">
							<img src="{{asset($project->photo)}}" class="{{$project->photo}}" alt="" />
							<div class="single-portfolio-overlay">
								<h2>{{ $project->title }}</h2>
								<h3>{{ $project->category }}</h3>
							</div>
						</a>
					</div>
    				<div id="pid{{ $project->id }}" class="popup-box mfp-fade mfp-hide">
    					<div class="content">
    						<div class="image">
    							<img src="{{asset($project->photo)}}" alt="{{$project->title}}">
    						</div>
    						<div class="desc">
    							<h4>{{ $project->title }}</h4>
    							<h5><i class="fa fa-folder"></i> {{ $project->category }}</h5>
    							<p>
    								{{ $project->description }}
    							</p>
    							<a href="{{$project->link}}" target="_blank" class="btn-view-project">View Project</a>
    						</div>
    					</div>
    				</div>
				</div>
				@endforeach
				<!-- Single Portfolio Ends -->
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="load-more-portfolio">
						<a>End Portfolio</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio Section Ends -->
	
	<!-- Our Team Section Starts -->

	<!-- Our Team Section Ends -->
	
	<!-- Pricing Section Starts -->
	<section class="pricing" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2>Our Pricing</h2>
						<p>Our Reasonable prices </p>
					</div>
					<!-- Section title end -->
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<!-- Pricing single start -->
					<div class="pricing-single wow fadeInUp" data-wow-delay="0.3s">
						<div class="pricing-header">
							<div class="icon-box">
								<i class="flaticon-settings"></i>
							</div>
							<h3>Basic</h3>
							<p>$500 <span>/per project</span></p>
						</div>
						
						<div class="pricing-body">
							<ul>
								<li>Highly personalized</li>
								<li>Mobile-friendly design</li>
								<li>Modern animations and transitions</li>
								<li>Complete admin panel interface</li>
								<li>SSL certificate installation</li>
								<li>Professional project support</li>
							</ul>
						</div>
						
						<div class="pricing-footer">
							<a href="#contact" class="btn-buynow">Get Started</a>
						</div>
					</div>
					<!-- Pricing single end -->
				</div>
				
				<div class="col-md-4">
					<!-- Pricing single start -->
					<div class="pricing-single wow fadeInUp" data-wow-delay="0.6s">
						<div class="pricing-header">
							<span class="recommanded">Featured</span>
							<div class="icon-box">
								<i class="flaticon-award"></i>
							</div>
							<h3>Standard</h3>
							<p>$1000 <span>/per project</span></p>
						</div>
						
						<div class="pricing-body">
							<ul>
								<li>User-friendly UI/UX design</li>
								<li>Payment Gateways</li>
								<li>Laravel Website Design</li>
								<li>Deploying a website</li>
								<li>ecommerce website</li>
								<li>Professional project support</li>
							</ul>
						</div>
						
						<div class="pricing-footer">
							<a href="#contact" class="btn-buynow">Get Started</a>
						</div>
					</div>
					<!-- Pricing single end -->
				</div>
				
				<div class="col-md-4">
					<!-- Pricing single start -->
					<div class="pricing-single wow fadeInUp" data-wow-delay="0.9s">
						<div class="pricing-header">
							<div class="icon-box">
								<i class="flaticon-trophy"></i>
							</div>
							<h3>Silver</h3>
							<p>$2000 <span>/per project</span></p>
						</div>
						
						<div class="pricing-body">
							<ul>
								<li>Backend and Frontend Development</li>
								<li>MySQL database queries</li>
								<li>Writing PHP scripts</li>
								<li>Deploying a website</li>
								<li>Developing dynamic websites</li>
								<li>Professional project support</li>
							</ul>
						</div>
						
						<div class="pricing-footer">
							<a href="#contact" class="btn-buynow">Get Started</a>
						</div>
					</div>
					<!-- Pricing single end -->
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing Section Ends -->
	
	<!-- Testimonial Section stars -->
	<section class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2>Testimonials</h2>
						<p>Happy Clients Says - About my works</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>
			
			
@php
$reviews = App\Models\Reviews::all();
@endphp
			<div class="row">
				<div class="col-md-8 offset-md-2">	
					<div class="swiper-container testimonial-slider">
						<div class="swiper-wrapper">
							<!-- Testimonial Slide start -->
							@foreach($reviews as $review)
							<div class="swiper-slide">
								<div class="testimonial-single">
									<div class="testimonial-header">
										<figure>
											<img src="{{ asset('frontend/images/male.webp') }}" alt="" />
										</figure>
										
										<h3>{{ $review->name ?? ''}}</h3>
										<h4>{{ $review->job ?? ''}}</h4>
									</div>
									
									<p>{{ $review->comment ?? ''}}</p>
								</div>
							</div>
							@endforeach
							<!-- Testimonial Slide end -->
						</div>
						
						<div class="testimonial-pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Section ends -->
	
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
				@foreach($blogs as $blog)
				<div class="col-md-4">
					<!-- Blog Single Start -->
					<div class="blog-single wow fadeInUp" data-wow-delay="0.3s">
						<div class="blog-header">
							<figure>
								<img src="{{ $blog->img ?? ''}}" alt="" />
							</figure>
							
							<div class="blog-header-overlay">
								<a href="{{ url('blog-detail/'.$blog->id ?? '')}}"><i class="fa fa-link"></i></a>
							</div>
						</div>
						
						<div class="blog-body">
							<h2>{{ $blog->title ?? ''}}</h2>
							<p>{{ Str::limit($blog->description, 120) ?? '' }}</p>
						</div>
						
						<div class="blog-footer">
							<ul>
                  <li><i class="fa fa-calendar"></i>{{ Carbon\Carbon::parse($blog->created_at)->format('Y-m-d') ?? ''}}</li>
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
									<img src="{{$brand->logo}}" alt="{{$brand->logo}}" />
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