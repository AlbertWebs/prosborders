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





    @include('front.blog')
@endsection
