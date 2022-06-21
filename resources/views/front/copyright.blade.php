@extends('front.master')

@section('content')
	<!-- Page Title -->
    <section class="page-title">
    	<div class="content" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}')">
			<div class="auto-container">
				<h1>Copyright Statement</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li><a href="{{url('/')}}">home</a></li>
			<li>Copyright Statement</li>
		</ul>
    </section>
    <!-- End Page Title -->

	<!-- Privacy Section -->
	<section class="privacy-section">
		<div class="auto-container">
			<!-- Privacy Content -->
			<div class="privacy-content">
				<div class="date">Updated January 14, 2022</div>
				<p>
                    This website and its content is copyright of Pros Borders - © Pros Borders 2020. All rights reserved. Any redistribution or reproduction of part or all of the contents in any form is prohibited other than the following:
                    <br><br>

                    You may print or download to a local hard disk extracts for your personal and non-commercial use only
                    you may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material
                    <br><br>

                    You may not, except with our express written permission, distribute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.
                </p>

			</div>


		</div>
	</section>
	<!-- End Privacy Section -->
@endsection
