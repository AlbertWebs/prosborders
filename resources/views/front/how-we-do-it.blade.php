@extends('front.master')

@section('content')
	<!-- Page Title -->
    <section class="page-title">
    	<div class="content" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}')">
			<div class="auto-container">
				<h1>How We Do It</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li><a href="{{url('/')}}">home</a></li>
			<li>How We Do It</li>
		</ul>
    </section>
    <!-- End Page Title -->

	<!-- Pricing Section -->
	<section class="pricing-section" style="background-image:url('{{asset('theme/assets/images/background/pattern-1.png')}}')">
		<!-- Three Color Layer -->
		<div class="three-color-layer">
			<span class="color-one"></span>
			<span class="color-two"></span>
			<span class="color-three"></span>
		</div>
		<!-- End Three Color Layer -->

		<!-- Circles Layer -->
		<div class="circles-layer">
			<span class="circle-one"></span>
			<span class="circle-two"></span>
			<span class="pattern-layer" style="background-image:url('{{asset('theme/assets/images/background/9.jpg')}}')"></span>
		</div>
		<!-- End Circles Layer -->

		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2 class="title">Creating New Values</h2>
				<div class="text" style="max-width:650px; margin:0 auto; color:#000000">Our clients and partners represent some of the largest and most
                    established companies and government agencies in Kenya. Using our
                    combined experience, technical expertise and local knowledge, we’re
                    able to deliver services and projectss that contribute to our economy, the
                    community and future generations.</div>
			</div>

            <hr style="border: 2px solid #e27a25 !important; z-index:9; width:100%;">

			<div class="row clearfix">
                <!-- Sec Title -->
                <div class="sec-title centered" style="margin:0 auto;">
                    {{-- <span class="icon flaticon-telephone"></span> --}}
                    <h3>Our Core  <span>Values</span></h3>
                    <br><br>
                </div>

                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Service Block  -->
                        <div class="service-block-two style-two col-lg-6 col-md-6 col-sm-12" >
                            <div class="inner-box">
                                <span class="icon fa fa-code"></span>
                                <h5><a href="#">Innovation</a></h5>
                                <div class="text" style="min-height:100px !important;">
                                    We anticipate change to fit our purposes by
                                    recognising the faults within our industry, creating
                                    ethical, forward-thinking solutions to overcome
                                    them.
                                </div>

                            </div>
                        </div>

                         <!-- Service Block  -->
                         <div class="service-block-two style-two col-lg-6 col-md-6 col-sm-12" >
                            <div class="inner-box">
                                <span class="icon fa fa-leaf"></span>
                                <h5><a href="#">Sustainability</a></h5>
                                <div class="text" style="min-height:100px !important;">
                                    Looking after our economy, the community
                                    and future generation. We strive to protect the
                                    environment by upholding effective and efficient
                                    environmental and sustainable practices as part
                                    of everyday business.
                                </div>

                            </div>
                        </div>

                        <div class="service-block-two style-two col-lg-6 col-md-6 col-sm-12" >
                            <div class="inner-box">
                                <span class="icon fa fa-medkit"></span>
                                <h5><a href="#">Safety & Health</a></h5>
                                <div class="text" style="min-height:100px !important;">
                                    We are relentless in upholding a positive and
                                    proactive safety culture that keeps people
                                    safe from harm, providing a healthy work
                                    environment.
                                </div>

                            </div>
                        </div>

                         <!-- Service Block  -->
                         <div class="service-block-two style-two col-lg-6 col-md-6 col-sm-12" >
                            <div class="inner-box">
                                <span class="icon fa fa-handshake"></span>
                                <h5><a href="#">Integrity</a></h5>
                                <div class="text" style="min-height:100px !important;">
                                    We do what we say, every time! We maintain
                                    the highest level of integrity in all our operations
                                    through ethical, open and professional
                                    communication with all our stakeholders.
                                </div>

                            </div>
                        </div>



                    </div>

                    <!-- Button Box -->
                    <div class="button-box text-center">
                        <a class="btn-style-three theme-btn" href="{{url('/')}}/our-policies"><span class="txt">Our Policies</span></a>
                    </div>

                </div>


			</div>

		</div>
	</section>
	<!-- End Pricing Section -->
@endsection
