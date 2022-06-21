@extends('front.master')

@section('content')
	<!-- Page Title -->
    <section class="page-title">
    	<div class="content" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}')">
			<div class="auto-container">
				<h1>Contact Us</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li><a href="{{url('/')}}">home</a></li>
			<li>Contact Us</li>
		</ul>
    </section>
    <!-- End Page Title -->

	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="image-layer" style="background-image:url('{{asset('theme/assets/images/background/4.jpg')}}')"></div>
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Have Some Questions?</h2>
				<div class="text">Thankyou for your intrest in our services. Please filllout the form bellow or or email us at <br> given id and we will get back to you promptly regarding your request.</div>
			</div>
			<div class="row clearfix">

				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<span class="icon fa fa-map-marker"></span>
						<div class="text">Ngong Rd, Malik Heights,  <br> th Floor Rm 406 Nairobi
                            Kenya</div>
					</div>
				</div>

				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<span class="icon fa fa-envelope"></span>
						<div class="text">info@prosborders.co.ke <br> hello@prosborders.co.ke</div>
					</div>
				</div>

				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<span class="icon fa fa-phone"></span>
						<div class="text">+1 (202) 540 0134 <br>(+254) 712 857 550</div>
					</div>
				</div>

			</div>

			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.168613544265!2d36.7827816!3d-1.2995093!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdfee283a57b3021f!2sVenshaq%20Holdings%20Limited!5e0!3m2!1sen!2ske!4v1649409868981!5m2!1sen!2ske" allowfullscreen=""></iframe>
				</div>
			</div>

			<!-- Lower Section -->
			<div class="lower-section" id="contact">
				<div class="row clearfix">

					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Multi-Disciplined <br> Engineering <br> Solutions </h2>

							<!-- Button Box -->
							<div class="button-box">
								<a class="btn-style-two theme-btn" href="{{url('/')}}"><span class="txt">More About Us</span></a>
							</div>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<h3>Request For Quote</h3>
								<div class="text">Best Tools & Materials Used For Safe</div>
							</div>
							<!-- Default Form -->
							<div class="default-form contact-form">
								<form method="post" action="sendemail.php" id="contact-form">
									<div class="form-group">
										<input type="text" name="name" value="" placeholder="Name" required>
									</div>

									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Email" required>
									</div>

									<div class="form-group">
										<input type="text" name="phone" value="" placeholder="Phone" required>
									</div>

									<div class="form-group">
										<input type="text" name="subject" value="" placeholder="Subject" required>
									</div>

									<div class="form-group text-center">
										<button type="submit" class="theme-btn btn-style-four"><span class="txt">contact us now</span></button>
									</div>
								</form>
							</div>
							<!--End Default Form-->

						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Contact Page Section -->
@endsection
