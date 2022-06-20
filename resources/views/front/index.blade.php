@extends('front.master')

@section('content')
	<!-- Main Slider Section -->
    <section class="main-slider">
		<div class="main-slider-carousel owl-carousel owl-theme">
			<!-- Slide 01 -->
			<div class="slide" style="background-image:url('{{asset('theme/assets/images/main-slider/mtu.jpg')}}')">
				<div class="auto-container clearfix">

					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Can Go Extra To Build The Best!</div>
							<h1>Providing
                                Client-Focused
                                <span class="theme-color">Construction
                                    Solutions </span></h1>
							<div class="text">
                                Over the years, we have helped create, connect and care for the roads, bridges and buildings that bring people and communities together
                            </div>
							<div class="btns-box">
								<a class="btn-style-one theme-btn" href="{{url('/')}}/about-us"><span class="txt">Discover More</span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- End Slide 01 -->


		</div>
        {{-- Part Ya Video --}}
		{{-- <div class="play-box">
			<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
		</div> --}}
    </section>
    <!-- End Main Slider Section -->



	<!-- Since Section -->
	<section class="since-section" style="background-image:url('{{asset('theme/assets/images/background/pattern-3.png')}}')">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="title-box">

							<h2> We Are <span>Pros Borders </span><br> And We’re
                                Here To Deliver <span>Quality</span> Projects
                                To <span>World Class</span> Standards! </h2>
						</div>

						<!-- Button Box - Iko Na Smooth Scroll -->
						<div class="button-box scroll-nav">
							<a class="btn-style-three theme-btn scroll-to-target" data-target="#center" href="#center"><span class="txt">Discover More</span></a>
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="text">
							<p>
                                Pros Borders Limited, is a multi-disciplinary
                                civil engineering and construction company
                                with proven capabilities over a wide range
                                of different technical fields in the Civil
                                Engineering and Building Works industries,
                                respectively. Over the years, we have
                                helped create, connect and care for the
                                roads, bridges and buildings that bring
                                people and communities together.
                            </p>
                            <hr>
                            <i>
                                We provide high-quality, reliable and unrivalled
                                infrastructural solutions to governmental
                                establishments and hold extensive experience and
                                expertise with commercial clients alike.
                                Dedicated to service excellence, we utilise innovation,
                                safety and integrity to change and improve the way
                                projects are designed, managed and executed.
                            </i>
						</div>



					</div>
				</div>


			</div>
            <hr style="border: 1px solid #e27a25 !important">
		</div>
	</section>
	<!-- End Since Section -->


	<!-- Services Section Four -->
	<section id="center" class="services-section-four" style="background-image:url('{{asset('theme/assets/images/background/pattern-1.png')}}')">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title centered">
				<span class="icon flaticon-telephone"></span>
				<h2>CENTRES OF  <span>EXCELLENCE</span></h2>
				<div class="text" style="max-width:650px; margin:0 auto;">Great infrastructure has the power to transform communities. Below is a list of the services that Pros Borders
                    undertake throughout Kenya in General Civil Engineering, Construction, Mining and Roads works</div>
			</div>

			<div class="row clearfix">

				<!-- Service Block Three -->
				<div class="service-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="project-planning.html"><img src="{{asset('theme/assets/images/resource/service-1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<span class="icon flaticon-home-1"></span>
								<h5><a href="project-planning.html">Civil Engineering and<br>  Road Building Works</a></h5>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="project-planning.html"><img src="{{asset('theme/assets/images/resource/service-2.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<span class="icon flaticon-under-construction"></span>
								<h5><a href="project-planning.html">Building Construction  <br> Works</a></h5>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="project-planning.html"><img src="{{asset('theme/assets/images/resource/service-3.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<span class="icon flaticon-blueprint"></span>
								<h5><a href="project-planning.html">Water and Drainage  <br> Works</a></h5>
							</div>
						</div>
					</div>
				</div>

				<!-- Service Block Three -->
				<div class="service-block-three col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="project-planning.html"><img src="{{asset('theme/assets/images/resource/service-4.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<span class="icon flaticon-building"></span>
								<h5><a href="project-planning.html">Construction  <br> Supplies</a></h5>
							</div>
						</div>
					</div>
				</div>





			</div>

			<!-- Lower Text -->
			<div class="lower-text">
				<div class="text">Want to see our company industrial services... <a href="services.html">View More Services</a></div>
			</div>

		</div>
	</section>
	<!-- End Services Section Four -->


	<!-- Solution Section -->
	<section class="solution-section" style="background-image:url('{{asset('theme/assets/images/background/4.jpg')}}')">
		<div class="side-image wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
			<img src="{{asset('theme/assets/images/resource/solution.png')}}" alt="" />
		</div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Multi-Disciplined Engineering Solutions </h2>
							<div class="text">South-central construction region since 2005</div>
						</div>
						<!-- Button Box -->
						<div class="button-box">
							<a class="btn-style-two theme-btn" href="about.html"><span class="txt">More About Us</span></a>
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Feature Block -->
						<div class="feature-block">
							<div class="inner-box">
								<span class="icon flaticon-helmet-2"></span>
								<h4><a href="accurate-measurements.html">Process Engineering</a></h4>
								<div class="text">Donec adipiscing tristique risus nec feugiat in. Porttitor massa id neque aliquam vestibulum morbi.</div>
								<a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block">
							<div class="inner-box">
								<span class="icon flaticon-office-building"></span>
								<h4><a href="accurate-measurements.html">Construction Management</a></h4>
								<div class="text">Donec adipiscing tristique risus nec feugiat in. Porttitor massa id neque aliquam vestibulum morbi.</div>
								<a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>

						<!-- Feature Block -->
						<div class="feature-block">
							<div class="inner-box">
								<span class="icon flaticon-crane"></span>
								<h4><a href="accurate-measurements.html">Civil Engineering</a></h4>
								<div class="text">Donec adipiscing tristique risus nec feugiat in. Porttitor massa id neque aliquam vestibulum morbi.</div>
								<a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Solution Section -->

	<!-- Video Section -->
	<section class="video-section" style="background-image:url('{{asset('theme/assets/images/background/5.jpg')}}')">
		<div class="auto-container">
			<div class="content">
				<h2>Make Constraction <br> your Dream into Reality</h2>
				<div class="text">South-central construction region since 2005</div>
				<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
			</div>
		</div>
	</section>
	<!-- End Video Section -->

	<!-- Team Section -->
	<section class="team-section" style="background-image:url('{{asset('theme/assets/images/background/pattern-1.png')}}')">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<span class="icon flaticon-telephone"></span>
				<h2>Our Company <span>Experts</span></h2>
				<div class="text">South-central construction region since 2005</div>
			</div>

			<!-- Product Info Tabs -->
			<div class="product-info-tabs">
				<!-- Team Tabs -->
				<div class="team-tabs tabs-box">

					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#team-1" class="tab-btn active-btn">
							<span class="number">1.</span>
							Benjamin Miller
							<i>Marketing Manager</i>
						</li>
						<li data-tab="#team-2" class="tab-btn">
							<span class="number">2.</span>
							Bryan Perry
							<i>Chief Engineering Officer</i>
						</li>
						<li data-tab="#team-3" class="tab-btn">
							<span class="number">3.</span>
							William Collins
							<i>Mechanical Engineer</i>
						</li>
						<li data-tab="#team-4" class="tab-btn">
							<span class="number">4.</span>
							Kilmon L. Limona
							<i>Support Engineer</i>
						</li>
						<li data-tab="#team-5" class="tab-btn">
							<span class="number">5.</span>
							Miranda H. Halim
							<i>Transportation Department</i>
						</li>
					</ul>

					<!--Tabs Container-->
					<div class="tabs-content">

						<!-- Tab / Active Tab -->
						<div class="tab active-tab" id="team-1">
							<div class="content">
								<div class="row clearfix">
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-6 col-sm-12">
										<div class="image">
											<img src="{{asset('theme/assets/images/resource/team-1.jpg')}}" alt="" />
										</div>
									</div>
									<!-- Info Column -->
									<div class="info-column col-lg-6 col-md-6 col-sm-12">
										<h4>Benjamin Miller</h4>
										<div class="designation">Marketing Manager</div>
										<div class="text">lim bornplete account of lmewul. Descriptive paragraph that tells clients lorem ipsum dolor mediocritatem maiestatis tempor appareat epicurei voluptatibus usuanomittam.</div>
										<ul class="contact-info">
											<li>
												<span class="icon flaticon-telephone"></span>
												<strong>Phone :</strong>
												<a href="tel:+9-000-999-9999">+9 (000) 999-9999</a>
											</li>

											<li>
												<span class="icon flaticon-email-4"></span>
												<strong>Email :</strong>
												<a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
											</li>

											<li>
												<span class="icon flaticon-maps-and-flags"></span>
												<strong>Address :</strong>
												Portfolio Technology 14, Capetown <br> 12 Road, Chicago, 9999, USA
											</li>
										</ul>
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

						<!-- Tab -->
						<div class="tab" id="team-2">
							<div class="content">
								<div class="row clearfix">
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-6 col-sm-12">
										<div class="image">
											<img src="{{asset('theme/assets/images/resource/team-2.jpg')}}" alt="" />
										</div>
									</div>
									<!-- Info Column -->
									<div class="info-column col-lg-6 col-md-6 col-sm-12">
										<h4>Bryan Perry</h4>
										<div class="designation">Chief Engineering Officer</div>
										<div class="text">lim bornplete account of lmewul. Descriptive paragraph that tells clients lorem ipsum dolor mediocritatem maiestatis tempor appareat epicurei voluptatibus usuanomittam.</div>
										<ul class="contact-info">
											<li>
												<span class="icon flaticon-telephone"></span>
												<strong>Phone :</strong>
												<a href="tel:+9-000-999-9999">+9 (000) 999-9999</a>
											</li>

											<li>
												<span class="icon flaticon-email-4"></span>
												<strong>Email :</strong>
												<a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
											</li>

											<li>
												<span class="icon flaticon-maps-and-flags"></span>
												<strong>Address :</strong>
												Portfolio Technology 14, Capetown <br> 12 Road, Chicago, 9999, USA
											</li>
										</ul>
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

						<!-- Tab -->
						<div class="tab" id="team-3">
							<div class="content">
								<div class="row clearfix">
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-6 col-sm-12">
										<div class="image">
											<img src="{{asset('theme/assets/images/resource/team-3.jpg')}}" alt="" />
										</div>
									</div>
									<!-- Info Column -->
									<div class="info-column col-lg-6 col-md-6 col-sm-12">
										<h4>William Collins</h4>
										<div class="designation">Mechanical Engineer</div>
										<div class="text">lim bornplete account of lmewul. Descriptive paragraph that tells clients lorem ipsum dolor mediocritatem maiestatis tempor appareat epicurei voluptatibus usuanomittam.</div>
										<ul class="contact-info">
											<li>
												<span class="icon flaticon-telephone"></span>
												<strong>Phone :</strong>
												<a href="tel:+9-000-999-9999">+9 (000) 999-9999</a>
											</li>

											<li>
												<span class="icon flaticon-email-4"></span>
												<strong>Email :</strong>
												<a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
											</li>

											<li>
												<span class="icon flaticon-maps-and-flags"></span>
												<strong>Address :</strong>
												Portfolio Technology 14, Capetown <br> 12 Road, Chicago, 9999, USA
											</li>
										</ul>
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

						<!-- Tab -->
						<div class="tab" id="team-4">
							<div class="content">
								<div class="row clearfix">
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-6 col-sm-12">
										<div class="image">
											<img src="{{asset('theme/assets/images/resource/team-4.jpg')}}" alt="" />
										</div>
									</div>
									<!-- Info Column -->
									<div class="info-column col-lg-6 col-md-6 col-sm-12">
										<h4>Kilmon L. Limona</h4>
										<div class="designation">Support Engineer</div>
										<div class="text">lim bornplete account of lmewul. Descriptive paragraph that tells clients lorem ipsum dolor mediocritatem maiestatis tempor appareat epicurei voluptatibus usuanomittam.</div>
										<ul class="contact-info">
											<li>
												<span class="icon flaticon-telephone"></span>
												<strong>Phone :</strong>
												<a href="tel:+9-000-999-9999">+9 (000) 999-9999</a>
											</li>

											<li>
												<span class="icon flaticon-email-4"></span>
												<strong>Email :</strong>
												<a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
											</li>

											<li>
												<span class="icon flaticon-maps-and-flags"></span>
												<strong>Address :</strong>
												Portfolio Technology 14, Capetown <br> 12 Road, Chicago, 9999, USA
											</li>
										</ul>
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

						<!-- Tab -->
						<div class="tab" id="team-5">
							<div class="content">
								<div class="row clearfix">
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-6 col-sm-12">
										<div class="image">
											<img src="{{asset('theme/assets/images/resource/team-5.jpg')}}" alt="" />
										</div>
									</div>
									<!-- Info Column -->
									<div class="info-column col-lg-6 col-md-6 col-sm-12">
										<h4>Miranda H. Halim</h4>
										<div class="designation">Transportation Department</div>
										<div class="text">lim bornplete account of lmewul. Descriptive paragraph that tells clients lorem ipsum dolor mediocritatem maiestatis tempor appareat epicurei voluptatibus usuanomittam.</div>
										<ul class="contact-info">
											<li>
												<span class="icon flaticon-telephone"></span>
												<strong>Phone :</strong>
												<a href="tel:+9-000-999-9999">+9 (000) 999-9999</a>
											</li>

											<li>
												<span class="icon flaticon-email-4"></span>
												<strong>Email :</strong>
												<a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
											</li>

											<li>
												<span class="icon flaticon-maps-and-flags"></span>
												<strong>Address :</strong>
												Portfolio Technology 14, Capetown <br> 12 Road, Chicago, 9999, USA
											</li>
										</ul>
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
			</div>

		</div>
	</section>
	<!-- End Team Section -->

	<!-- FullWidth Section -->
	<section class="fullwidth-section">
		<div class="outer-container">
			<div class="row clearfix">
				<!-- Left Column -->
				<div class="left-column" style="background-image:url('{{asset('theme/assets/images/background/fullwidth-1.jpg')}}')">
					<div class="inner-column">
						<div class="title">Why Choose Us?</div>
						<h3>Make The World Better Place <br> With Construction Quality</h3>
						<div class="text">multi-disciplinary
                            civil engineering and construction company since 2018</div>
						<a href="{{url('/')}}/vision-and-mission" class="plus fa fa-plus"></a>
					</div>
				</div>
				<!-- Right Column -->
				<div class="right-column" style="background-image:url('{{asset('theme/assets/images/background/fullwidth-2.png')}}')">
					<div class="inner-column">
						<h3>Bringing Your Ideas</h3>
						<h5>Innovations to Life</h5>
						<a href="team.html" class="theme-btn btn-style-four"><span class="txt">Contact Our Expert</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End FullWidth Section -->

	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<span class="icon flaticon-telephone"></span>
				<h2>Our Blog <span>Insight</span></h2>
				<div class="text">South-central construction region since 2005</div>
			</div>

			<div class="row clearfix">

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('theme/assets/images/resource/news-1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date">31 OCT 2022</div>
							<h4><a href="blog-detail.html">A plan to solve California's housing crisis</a></h4>
							<ul class="post-meta">
								<li><span class="icon fa fa-user"></span>James Smith</li>
								<li><span class="icon fa fa-comment"></span>4 Comments</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('theme/assets/images/resource/news-2.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date">24 Nov 2022</div>
							<h4><a href="blog-detail.html">Achieving resiliency through integrated design</a></h4>
							<ul class="post-meta">
								<li><span class="icon fa fa-user"></span>James Smith</li>
								<li><span class="icon fa fa-comment"></span>4 Comments</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{asset('theme/assets/images/resource/news-3.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date">06 Dec 2022</div>
							<h4><a href="blog-detail.html">Wellness is now part of more colleges’ health services</a></h4>
							<ul class="post-meta">
								<li><span class="icon fa fa-user"></span>James Smith</li>
								<li><span class="icon fa fa-comment"></span>4 Comments</li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<!-- Button Box -->
			<div class="button-box text-center">
				<a class="btn-style-two theme-btn" href="blog.html"><span class="txt">View All Posts</span></a>
			</div>

		</div>
	</section>
	<!-- End News Section -->
@endsection
