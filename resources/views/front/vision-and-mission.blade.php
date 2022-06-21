@extends('front.master')

@section('content')
	<!-- Page Title -->
    <section class="page-title">
    	<div class="content" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}')">
			<div class="auto-container">
				<h1>Vision and Mission</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li><a href="{{url('/')}}">home</a></li>
			<li>Vision and Mission</li>
		</ul>
    </section>
    <!-- End Page Title -->

	<!-- Services Section -->
	<section class="services-section">
		<div class="image-layer-one" style="background-image:url('{{asset('theme/assets/images/background/2.jpg')}}')"></div>
		<div class="auto-container">
            <div class="sec-title centered">
				{{-- <span class="icon flaticon-telephone"></span> --}}
				<div class="text" style="max-width:550px; margin:0 auto; color:#000000;">At Pros Borders we believe in continuing to innovate and
                    develop solutions that deliver roads of the highest quality,
                    are more environmentally cautious and last longer.</div>
			</div>
			<div class="inner-container" style="background-image:url('{{asset('theme/assets/images/background/1.jpg')}}')">
				<div class="row clearfix">

					<!-- Service Block -->
					<div class="service-block col-lg-6 col-md-6 col-sm-12">
						<div class="inner-box">
							<span class="icon fa fa-binoculars"></span>
							<h4><a href="#">OUR VISION</a></h4>
							<div class="text">We are committed to
                                achieving extraordinary
                                results for our customers,
                                building satisfying careers
                                for our people, and earning
                                a fair return on the value we
                                deliver.</div>
							{{-- <a href="#" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a> --}}
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-6 col-md-6 col-sm-12">
						<div class="inner-box">
							<span class="icon fa fa-bullseye"></span>
							<h4><a href="#">OUR MISSION</a></h4>
							<div class="text">Dedicated to providing quality construction
                                products and services to our customers
                                by maintaining the highest level of safety,
                                integrity and innovation, while remaining
                                environmentally responsible and fostering
                                growth in our employees and communities.</div>
							{{-- <a href="#" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a> --}}
						</div>
					</div>
                    <hr style="border: 2px solid #e27a25 !important; z-index:9; width:100%;">
					<!-- Service Block -->
					<div class="service-block col-lg-12 col-md-6 col-sm-12">
						<div class="inner-box">
							<span class="icon fa fa-diamond"></span>
							<h4><a href="#">OUR STRATEGY</a></h4>
							<div class="text">Our objective is to deliver optimal cost-effective solutions
                                that fulfill the client’s, engineer’s and Local Authority’s
                                specifications and requirements expeditiously, and with
                                complete legitimacy. Our success greatly depends on our
                                proven capability to adapt to the unique, changing and
                                challenging developmental needs of the region.</div>

						</div>
					</div>

				</div>
			</div>

			<!-- Button Box -->
			<div class="button-box text-center">
				<a class="btn-style-two theme-btn" href="{{url('/')}}/center-of-excellence"><span class="txt">Center of Excellence</span></a>
			</div>

		</div>
	</section>
	<!-- End Services Section -->
@endsection
