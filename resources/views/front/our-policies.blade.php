@extends('front.master')

@section('content')
	<!-- Page Title -->
    <section class="page-title">
    	<div class="content" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}')">
			<div class="auto-container">
				<h1>Our Policies</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li><a href="{{url('/')}}">home</a></li>
			<li>Our Policies</li>
		</ul>
    </section>
    <!-- End Page Title -->

	<!-- Pricing Section -->
	<section class="pricing-section" style="background-image:url('{{asset('theme/assets/images/background/pattern-1.png')}}')">
        <div class="auto-container">
			<!-- Lower Section -->
			<div class="lower-section">


				<!-- Team Info Tabs -->
				<div class="team-info-tabs">
					<!-- Team Tabs -->
					<div class="team-tabs-two tabs-box">

						<!-- Tab Btns -->
						<ul class="tab-btns tab-buttons clearfix">
							<li  data-tab="#prod-experiance" class="tab-btn active-btn">Occupational Health & Safety Policy</li>
							<li  data-tab="#prod-ethic" class="tab-btn">Environmental & Sustainability Policy</li>
						</ul>

						<!-- Tabs Container -->
						<div class="tabs-content">

							<!-- Tab / Active Tab -->
							<div class="tab active-tab" id="prod-experiance">
								<div class="content">
									<h4>Occupational Health & Safety Policy</h4>
									<p>
                                        Pros Borders appreciates the benefits of an
                                        organisation with a ‘safety conscious’ attitude.
                                        We recognise that by maintaining a safe work
                                        environment will come, not only a minimisation of the
                                        risk of injury, but also improved productivity as the
                                        workforce is able to confidently focus on the job at
                                        hand.
                                        <br>
                                        <br>
                                        Safety demands cooperation on everyone’s part.
                                        Thus, it is important that communication be kept
                                        open at all times between the management and
                                        employees. Workers who notice hazards or other
                                        safety problems, or feel that they need additional
                                        training, must notify their supervisor. Supervisors
                                        and management must address these concerns
                                        and take corrective action when warranted.

                                    </p>
								</div>
							</div>

							<!-- Tab -->
							<div class="tab" id="prod-ethic">
								<div class="content">
									<h4>Environmental & Sustainability Policy</h4>
									<p>
                                        Pros Borders is committed to protecting the
                                        environment. We are committed to ensuring our
                                        operations are conducted in a manner that prevents
                                        pollution, preserves natural resources and conserves
                                        all heritages. We are focused on pursuing our
                                        corporate responsibility to minimise impact to land,
                                        water, air, flora and fauna.

                                        <br><br>

                                        We are committed to responding to the daily
                                        environmental challenges that we encounter in
                                        our business and hope to contribute to the
                                        foundation of an environmentally sustainable
                                        future for our community and future generations.
                                        This policy shall be approved by top
                                        management, communicated and agreed to by
                                        all staff and subcontractors so that all persons
                                        working for or on behalf of Pros Borders are
                                        committed to environmental protection while
                                        going about their work.
                                    </p>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Pricing Section -->
@endsection
