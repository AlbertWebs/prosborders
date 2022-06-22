@extends('front.master')

@section('content')
@foreach ($Blog as $blog)


	<!-- Page Title -->
    <section class="page-title">
    	<div class="content" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}')">
			<div class="auto-container">
				<h1>{{$blog->title}}</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li><a href="{{url('/')}}">home</a></li>
			<li>{{$blog->title}}</li>
		</ul>
    </section>
    <!-- End Page Title -->


	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="blog-detail">
						<div class="inner-box">
							<!-- Social Box -->
							<ul class="social-box">
								<li class="follow fa fa-share-alt"> 45</li>
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.google.com/" class="fa fa-google"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://www.pinterest.com/" class="fa fa-pinterest-p"></a></li>
								<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul>
							<div class="image">
								<img src="assets/images/resource/news-17.jpg" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li><span class="icon fa fa-user"></span>Mike Ochieng</li>
									<li><span class="icon fa fa-comment"></span>Construction, Road Works, Ideal design, Architecture</li>
								</ul>
								<h4>{{$blog->title}}</h4>
								<ul class="post-meta">
									<li><span class="icon fa fa-user"></span>Mike Ochieng</li>
									<li><span class="icon fa fa-comment"></span>{{$blog->id}} Comments</li>
								</ul>
								{{--  --}}
                                {!!html_entity_decode($blog->content)!!}
                                {{--  --}}
							</div>
						</div>

						<!-- Author Box -->
						<div class="blog-author-box">
							<div class="author-inner">
								<div class="thumb"><img src="assets/images/resource/author-3.jpg" alt=""></div>
								<h4 class="name">About Admin</h4>
								<div class="text">How has your advanced education positively impacted your current work at Venshaq Holdings Limited</div>
							</div>
							<ul class="social-icon clearfix">
								<li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>


					</div>


				</div>

				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">



						<!-- Post Widget -->
						<div class="sidebar-widget post-widget">
							<!-- Sidebar Title -->
							<div class="title-box">
								<h4>Recent Posts</h4>
							</div>
							<div class="widget-content">
                                <?php $Other = DB::table('blogs')->get(); ?>
                                @foreach ($Other as $item)
                                    @if($item->id == $blog->id)

                                    @else
                                    <div class="post">
                                        <div class="thumb"><a href="{{url('/')}}/blog/{{$item->slung}}"><img src="{{asset('theme/assets/images/resource/')}}/{{$item->image}}" alt="{{$item->title}}"></a></div>
                                        <h6><a href="{{url('/')}}/blog/{{$item->slung}}">{{$item->title}}</a></h6>
                                        <div class="post-date">{!! date('d M Y', strtotime($item->created_at)) !!}</div>
                                    </div>
                                    @endif
                                @endforeach

								<div class="post">
									<div class="thumb"><a href="{{url('/')}}/blog/{{$item->slung}}"><img src="assets/images/resource/post-thumb-4.jpg" alt=""></a></div>
									<h6><a href="{{url('/')}}/blog/{{$item->slung}}">Going Shopping in New Dress & a Hat</a></h6>
									<div class="post-date">31 OCT 2021</div>
								</div>

								<div class="post">
									<div class="thumb"><a href="{{url('/')}}/blog/{{$item->slung}}"><img src="assets/images/resource/post-thumb-5.jpg" alt=""></a></div>
									<h6><a href="{{url('/')}}/blog/{{$item->slung}}">How an Island Forms in River And Stones</a></h6>
									<div class="post-date">31 OCT 2021</div>
								</div>

							</div>
						</div>



						<!-- Company Widget -->
						<div class="sidebar-widget company-widget">
							<!-- Sidebar Title -->
							<div class="title-box">
								<h4>Company Profile</h4>
							</div>
							<div class="widget-content">

								<!-- Project Widget -->
								<div class="project-widget">
									<div class="inner-box">
										<div class="image text-center">
											<a  download href="{{url('/')}}/uploads/files/ProsBorders-Company-profile.pdf" class="theme-btn btn-style-one"><span class="txt"><span class="fa fa-download"></span> Download</span></a>
										</div>
									</div>
								</div>


							</div>
						</div>




					</aside>
				</div>

			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->

    @endforeach
@endsection
