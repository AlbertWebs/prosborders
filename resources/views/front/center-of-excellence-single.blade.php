@extends('front.master')

@section('content')
@foreach ($Service as $ser)


	<!-- Page Title -->
    <section class="page-title">
    	<div class="content" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}')">
			<div class="auto-container">
				<h1>{{$ser->title}}</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li><a href="{{url('/')}}">home</a></li>
			<li>{{$ser->title}}</li>
		</ul>
    </section>
    <!-- End Page Title -->
<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-detail">
                    <div class="inner-box">
                        <!-- Upper Box -->
                        {{-- <div class="upper-box">
                            <div class="box-inner">
                                <span class="icon flaticon-helmet"></span>
                                <div class="title">Pros Borders</div>
                                <h2>{{$ser->title}}</h2>
                                <a href="{{url('/')}}/contact-us" class="theme-btn btn-style-two"><span class="txt">Get A Quote</span></a>
                            </div>
                        </div> --}}
                        <div class="image">
                            <img src="{{asset('theme/assets/images/resource/')}}/{{$ser->image}}" alt="" />
                        </div>
                        <p>{!!html_entity_decode($ser->content)!!}</p>

                    </div>
                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">



                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget">
                        <div class="widget-content">
                            <!-- Sidebar Title -->
                            <div class="title-box">
                                <h4>Other Services</h4>
                            </div>
                            <ul class="blog-cat-two">
                                <?php $Other = DB::table('services')->get(); ?>
                                @foreach ($Other as $items)
                                @if($items->id == $ser->id)

                                @else
                                <li class="active"><a href="{{url('/')}}/center-of-excellence/{{$items->slung}}">{{$items->title}}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>





                </aside>
            </div>

            <hr style="border: 2px solid #e27a25 !important; z-index:9; width:100%;">

        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->


    @endforeach
@include('front.blog')
@endsection
