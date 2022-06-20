<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Bricks HTML-5 Template | Homepage 01</title>
<!-- Stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"> --}}
<link href="{{asset('theme/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/fonts.googleapis.com/css2e54d.css?family=Inter:wght@100;300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap')}}" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js')}}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

	<!-- Preloader -->
	<div class="loader-wrap">
		<div class="preloader">
			<div class="preloader-close">x</div>
			<div id="handle-preloader" class="handle-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span data-text-preloader="P" class="letters-loading">
							P
						</span>
						<span data-text-preloader="R" class="letters-loading">
							R
						</span>
						<span data-text-preloader="O" class="letters-loading">
							O
						</span>
						<span data-text-preloader="S" class="letters-loading">
							S
						</span>
						<span data-text-preloader="&nbsp;" class="letters-loading">
                            &nbsp;
						</span>
						<span data-text-preloader="B" class="letters-loading">
							B
						</span>
                        <span data-text-preloader="O" class="letters-loading">
							O
						</span>
                        <span data-text-preloader="R" class="letters-loading">
							R
						</span>
                        <span data-text-preloader="D" class="letters-loading">
							D
						</span>
                        <span data-text-preloader="E" class="letters-loading">
							E
						</span>
                        <span data-text-preloader="R" class="letters-loading">
							R
						</span>
                        <span data-text-preloader="S" class="letters-loading">
							S
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader End -->







    @include('front.header-2')
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">

					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="{{url('/')}}"><img src="{{asset('theme/assets/images/logo-2.png')}}" alt="" /></a>
							</div>
							<div class="content-box">
								<h4>About Us</h4>
								<p class="text">The argument in favor of using filler text goes something like this: If you use Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h4>Contact Info</h4>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>bricks@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->

    @yield('content')

	<!-- Main Footer -->
    <footer class="main-footer footer-style-two style-three" style="background-image:url('{{asset('theme/assets/images/background/6.jpg')}}')">
    	<div class="auto-container">
            <!-- Footer Gallery - Instagram Feeds -->
			{{-- <div class="footer-gallery">
				<div class="footer-gallery-carousel owl-carousel owl-theme">
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/11.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/12.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/13.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/14.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/15.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/11.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/12.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/13.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/14.jpg')}}" alt="" /></a>
					</div>
					<div class="slide">
						<a href="{{asset('theme/assets/images/gallery/11.jpg')}}" data-fancybox="gallery" data-caption=""><img src="{{asset('theme/assets/images/gallery/15.jpg')}}" alt="" /></a>
					</div>
				</div>
			</div> --}}

			<!-- Upper Box -->
			<div class="upper-box">
				<div class="box-inner">
					<div class="title">Sign Up To Our <span>Newsletter</span></div>
					<!-- Subscribe Form -->
					<div class="subscribe-form">
						<form method="post" action="http://ary-themes.com/html/noor_tech/bricks/contact.html">
							<div class="form-group">
								<span class="icon fa fa-envelope"></span>
								<input type="email" name="email" value="" placeholder="Enter your email address" required="">
								<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe Now</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Upper Box -->

        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">

					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Footer Column -->
							<div class="footer-column col-lg-8 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="widget-content">

										<div class="text">Pro Borders Limited, is a multi-disciplinary
                                            civil engineering and construction company
                                            with proven capabilities over a wide range
                                            of different technical fields in the Civil
                                            Engineering and Building Works industries,
                                            respectively.</div>
									</div>
								</div>
							</div>

							<!-- Footer Column -->
							<div class="footer-column col-lg-4 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5>QUICK LINKS</h5>
									<ul class="list-link">
										<li><a href="{{url('/')}}/about-us">About Company</a></li>
										<li><a href="{{url('/')}}/our-services">Services</a></li>
										<li><a href="{{url('/')}}/contact-us">Contact</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Footer Column -->
							<div class="footer-column col-lg-5 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5>Company</h5>
									<ul class="list-link">
										<li><a href="{{url('/')}}/terms-and-conditions">Terms and Conditions</a></li>
										<li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
										<li><a href="{{url('/')}}/copyright">Copyright</a></li>
									</ul>
								</div>
							</div>

							<!-- Footer Column -->
							<div class="footer-column col-lg-7 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5>FOLLOW US</h5>
									<!-- Social Box -->
									<ul class="social-box">
										<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
										<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
										<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
										<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
                                        <li><a href="https://youtube.com/" class="fa fa-instagram"></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">&copy; <a href="{{url('/')}}">Pros Borders</a> - Copyright {{date('Y')}} | <a href="#">All Rights Reserved</a></div>
			</div>
		</div>
	</footer>
	<!-- End Main Footer -->


</div>
<!-- End PageWrapper -->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="http://ary-themes.com/html/noor_tech/bricks/blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->



<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{asset('theme/assets/js/jquery.js')}}"></script>
<script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
<script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('theme/assets/js/appear.js')}}"></script>
<script src="{{asset('theme/assets/js/parallax.min.js')}}"></script>
<script src="{{asset('theme/assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('theme/assets/js/owl.js')}}"></script>
<script src="{{asset('theme/assets/js/wow.js')}}"></script>
<script src="{{asset('theme/assets/js/validate.js')}}"></script>
<script src="{{asset('theme/assets/js/pagenav.js')}}"></script>
<script src="{{asset('theme/assets/js/mixitup.js')}}"></script>
<script src="{{asset('theme/assets/js/isotope.js')}}"></script>
<script src="{{asset('theme/assets/js/nav-tool.js')}}"></script>
<script src="{{asset('theme/assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('theme/assets/js/script.js')}}"></script>


</body>

</html>




