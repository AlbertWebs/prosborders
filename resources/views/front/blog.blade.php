<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            {{-- <span class="icon flaticon-telephone"></span> --}}
            <h2>Our Blog <span>Insight</span></h2>
            {{-- <div class="text">South-central construction region since 2005</div> --}}
        </div>

        <div class="row clearfix">

            <?php $Blog = DB::table('blogs')->limit('3')->get(); ?>
            @foreach ($Blog as $item)
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-detail.html"><img src="{{asset('theme/assets/images/resource/')}}/{{$item->image}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date"> {!! date('d M Y', strtotime($item->created_at)) !!}</div>
                            <h4><a href="{{url('/')}}/blog/{{$item->slung}}">{{$item->title}}</a></h4>
                            <ul class="post-meta">
                                <li><span class="icon fa fa-user"></span>Mike Ochieng</li>
                                <li><span class="icon fa fa-comment"></span>{{$item->id}} Comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

        <!-- Button Box -->
        <div class="button-box text-center">
            <a class="btn-style-two theme-btn" href="blog.html"><span class="txt">View All Posts</span></a>
        </div>

    </div>
</section>
<!-- End News Section -->
