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
				<p>For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other who we know will help us create added value for your project.</p>
				<div class="date">Updated January 6, 2022</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at nisl ligula. Suspendisse vitae ex fermentum, suscipit sem id, dapibus orci. Cras efficitur mi augue, ut sodales felis rhoncus bibendum. Fusce sagittis nibh orci, id vestibulum tortor aliquet ut. Vivamus maximus felis ac nisl luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at nisl ligula. Suspendisse vitae ex fermentum, suscipit sem id, dapibus orci. Cras efficitur mi augue, ut sodales felis rhoncus bibendum. Fusce sagittis nibh orci, id vestibulum tortor aliquet ut. Vivamus maximus felis ac nisl luctus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at nisl ligula. Suspendisse vitae ex fermentum, suscipit sem id, dapibus orci. Cras efficitur mi augue Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at nisl ligula. Suspendisse vitae ex fermentum, suscipit sem id, dapibus orci. Cras efficitur mi augue.</p>

			</div>


		</div>
	</section>
	<!-- End Privacy Section -->
@endsection
