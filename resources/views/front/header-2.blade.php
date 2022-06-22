<!-- Header Style One / Four -->
<header class="main-header header-style-four">

    <!-- Header Top Two -->
    <div class="header-top-two">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left clearfix">
                    <ul class="info-links">
                        <li><span class="icon fa fa-phone"></span> Call Us: <a href="tel:+1 (202) 540 0134">+1 (202) 540 0134</a></li>
                        <li><span class="icon fa fa-envelope"></span>Email: <a href="mailto:info@prosborder.co.ke">info@prosborder.co.ke</a></li>
                        <li><span class="icon fa fa-map-marker"></span><a target="new" href="https://goo.gl/maps/5PLCUeDenY2U1KPq5">
                            Ngong Rd, Malik Heights,
                            4th Floor Rm 406 Nairobi Kenya</a></li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right clearfix">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li class="follow">We are social:</li>
                        <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        <li><a href="https://instagram.com/" class="fa fa-instagram"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{url('/')}}"><img width="200" src="{{asset('uploads/logo.jpg')}}" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>


                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{url('/')}}">Home</a>

                                </li>
                                <li class="current"><a href="{{url('/')}}/vision-and-mission">Vision & Mission</a>

                                </li>
                                <li class="current"><a href="{{url('/')}}/how-we-do-it">How we do it</a>

                                </li>
                                <li class="current"><a href="{{url('/')}}/our-policies">Our Policies</a>

                                </li>
                                <li class="current"><a href="{{url('/')}}/center-of-excellence">Center of Excellence</a>

                                </li>
                                {{-- <li class="current"><a href="#">Articles</a>

                                </li> --}}
                                <li class="current"><a href="{{url('/')}}/contact-us">Contact Us</a>

                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                        <!-- Search Btn -->
                        {{-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div> --}}



                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon fa fa-bars"></span></div>

                        <!-- Button Box -->
                        <div class="button-box">
                            <a download href="{{url('/')}}/uploads/files/ProsBorders-Company-profile.pdf" class="theme-btn btn-style-two"><span class="txt"><span class="icon fa fa-download"></span> Company Profile</span></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{url('/')}}" title=""><img width="200" src="{{asset('uploads/logo.jpg')}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon fa fa-bars"></span></div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-bars"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{url('/')}}"><img src="assets/images/logo-small.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
