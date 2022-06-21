@extends('front.master')

@section('content')
	<!-- Page Title -->
    <section class="page-title">
    	<div class="content" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}')">
			<div class="auto-container">
				<h1>Centers Of Excellence</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li><a href="{{url('/')}}">home</a></li>
			<li>Centers Of Excellence</li>
		</ul>
    </section>
    <!-- End Page Title -->


	<!-- Services Section Four -->
	<section class="services-section-four style-two" style="background-image:url(assets/images/background/pattern-1.png)">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title centered">
				<span class="icon flaticon-telephone"></span>
				<h2>Creating Access and <span>Opportunity</span></h2>
				<div class="text" style="max-width:550px; margin:0 auto; color:#000000;">Great infrastructure has the power to transform communities. Below is a list of the services that Pro Borders
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



		</div>
	</section>
	<!-- End Services Section Four -->

@include('front.blog')
@endsection
