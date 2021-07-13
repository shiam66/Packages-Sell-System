@extends('frontEnd.master')

@section('title')
    Company Profile Site
@endsection


@section('mainContent')

	<!-- Start Main Banner Area -->
    <div class="main-banner-with-large-shape-area" style="padding-top: 180px;">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="main-banner-white-content">
                                    <h1 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Best ecommerce solution for startup business.</h1>
                                    <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="main-banner-image">
                                    <img src="{{asset('public/frontEnd/assets/images/slider/01.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="main-banner-white-content">
                                    <h1 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Best ecommerce solution for startup business.</h1>
                                    <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="main-banner-image">
                                    <img src="{{asset('public/frontEnd/assets/images/slider/02.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="main-banner-white-content">
                                    <h1 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Best ecommerce solution for startup business.</h1>
                                    <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="main-banner-image">
                                    <img src="{{asset('public/frontEnd/assets/images/slider/03.png')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="main-banner-white-content">
                                    <h1 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Best ecommerce solution for startup business.</h1>
                                    <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="main-banner-image">
                                    <img src="{{asset('public/frontEnd/assets/images/slider/04.png')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End Main Banner Area -->
    
    <!-- Start About Area -->
    <div class="about-area pt-100 pb-70" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image" data-speed="0.02" data-revert="true">
                        <img src="{{asset('public/frontEnd/assets/images/about/about.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-content">
                            <div class="tag">
                                <img src="{{asset('public/frontEnd/assets/images/about/tag-icon.png')}}" alt="image">
                            </div>
                            <h3>Over 12 Year Professional Experiences</h3>
                            <p>Best ecommerce solution for startup business. Scelerisque amet odio velit  auctor. nam elit nulla eget sodales dui pulvinar. Best Strategic planning dolor sit sectetur morethe</p>
                            <p>Scelerisque amet odio velit eu auctor. Aliquet nam elit.</p>
                        </div>

                        <div class="about-inner-content">
                            <img src="{{asset('public/frontEnd/assets/images/about/img1.png')}}" alt="image">
                            <p>Best ecommerce solution for startup business. risque amet odio velit eu auctor. Aliquet nam elit nulla eget sodales dui pulvinar. Best eone Strategic planning dolor.</p>
                        </div>

                        <div class="about-inner-content">
                            <img src="{{asset('public/frontEnd/assets/images/about/img2.png')}}" alt="image">
                            <p>Company digital agency for your start  planning dolor sit amet consectetur adipiscing elit. Scelerisque amet odio velit eu auctor. Aliquet nam elit nulla eget sodales dui pulvinar. Best Strategic planning.</p>
                        </div>

                        <div class="about-inner-content">
                            <img src="{{asset('public/frontEnd/assets/images/about/img3.png')}}" alt="image">
                            <p>Best ecommerce solution for startup business. risque amet odio velit eu auctor. Aliquet nam elit nulla eget sodales dui pulvinar. Best eone Strategic planning dolor.</p>
                        </div>

                        <div class="about-btn">
                            <a href="#" class="default-btn">Read More <i class="ri-arrow-right-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Video Area -->
    <div class="video-area pt-100">
        <div class="container">
            <div class="video-view-content">
                <div class="video-image">
                    <img src="{{asset('public/frontEnd/assets/images/video-bg.png')}}" alt="image">
                </div>
                <div class="overlay-bg"></div>

                <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                    <i class="ri-play-line"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Video Area -->

    <!-- Start Services Area -->
    <div class="services-area pt-100 pb-70" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Services We Offer</h2>
                <p>Best ecommerce solution for startup business. Scelerisque amet odio velit auctor nam elit nulla eget sodales dui pulvina</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="icon">
                            <i class="ri-gallery-fill"></i>
                        </div>
                        <h3>
                            <a href="#">Product Management</a>
                        </h3>
                        <p>Branding just like your personal identity makes you uniquely you your brand identity is the special sauce of your business that sets you apart from every other Tom Dick and Harry Inc.</p>
                        <a href="#" class="services-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="icon bg-36CC72">
                            <i class="ri-sort-asc"></i>
                        </div>
                        <h3>
                            <a href="#">Order Management</a>
                        </h3>
                        <p>Company offering you the best digital marketing services to just like your personal identity makes you uniquely you, your brand identity is the special sauce of your to our customer.</p>
                        <a href="#" class="services-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="icon bg-FF414B">
                            <i class="ri-stock-line"></i>
                        </div>
                        <h3>
                            <a href="#">Inventory Management</a>
                        </h3>
                        <p>Company offering you the best digital marketing services to just like your personal identity makes you uniquely you, your brand identity is the special sauce of your to our customer.</p>
                        <a href="#" class="services-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="icon bg-FF6D3D">
                            <i class="ri-bar-chart-2-line"></i>
                        </div>
                        <h3>
                            <a href="#">Product Promotion</a>
                        </h3>
                        <p>Company offering you the best digital marketing services to just like your personal identity makes you uniquely you, your brand identity is the special sauce of your to our customer.</p>
                        <a href="#" class="services-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="icon bg-8932F8">
                            <i class="ri-image-line"></i>
                        </div>
                        <h3>
                            <a href="#">Gallery</a>
                        </h3>
                        <p>Company offering you the best digital marketing services to just like your personal identity makes you uniquely you, your brand identity is the special sauce of your to our customer.</p>
                        <a href="#" class="services-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="icon bg-FFCA40">
                            <i class="ri-truck-line"></i>
                        </div>
                        <h3>
                            <a href="#">Delivery Management</a>
                        </h3>
                        <p>Company offering you the best digital marketing services to just like your personal identity makes you uniquely you, your brand identity is the special sauce of your to our customer.</p>
                        <a href="#" class="services-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Fun Facts Area -->
    <div class="fun-facts-area pb-100">
        <div class="container">
            <div class="fun-facts-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="ri-user-line"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="3230">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Happy Client</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="ri-briefcase-line"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="3026">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Case Solved</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="ri-trophy-line"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="320">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Winning Awards</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="ri-flag-line"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="102">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Country Over</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Facts Area -->
    
    <!-- Start Plans Area -->
    <div class="plans-area bg-gradient-color pt-100 pb-100" id="pricing">
        <div class="container">
            <div class="section-title">
                <h2>Choose Your Best Plans</h2>
                <p>Pay by monthly or yearly, you can cancel it anytime whatever you want</p>
            </div>

            <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="one-month-tab" data-bs-toggle="pill" data-bs-target="#one-month" type="button" role="tab" aria-controls="one-month" aria-selected="true">1 Month</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="three-month-tab" data-bs-toggle="pill" data-bs-target="#three-month" type="button" role="tab" aria-controls="three-month" aria-selected="false">3 Month</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="six-month-tab" data-bs-toggle="pill" data-bs-target="#six-month" type="button" role="tab" aria-controls="six-month" aria-selected="false">6 Month</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="one-year-tab" data-bs-toggle="pill" data-bs-target="#one-year" type="button" role="tab" aria-controls="one-year" aria-selected="false">1 Year</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="one-month" role="tabpanel" aria-labelledby="one-month-tab">
                    <div id="one-month" class="wrapper-full">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table">
                                    <div class="plans-header">
                                        <h3>Basic</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-200 <span>/Month</span></div>

                                    <div class="plans-btn">
                                        {!! Form::open(['url' => 'subscribe/new', 'method' => 'POST']) !!}
                                            <input type="hidden" value="200" name="amount">
                                            <input type="hidden" value="1 Month" name="period">
                                            <input type="hidden" value="Basic" name="packageName">
                                            <input type="submit" name="btn" class="default-btn" value="Subscribe Now"><span></span>
                                        {!! Form::close() !!}
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 100 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-close-line"></i> <del>Announcement</del></li>
                                        <li><i class="ri-close-line"></i> <del>Product Promotion</del></li>
                                        <li><i class="ri-close-line"></i> <del>Delivery Management</del></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table active-box">
                                    <div class="plans-header">
                                        <h3>Standard</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-300 <span>/Month</span></div>

                                    <div class="plans-btn">
                                        {!! Form::open(['url' => 'subscribe/new', 'method' => 'POST']) !!}
                                            <input type="hidden" value="300" name="amount">
                                            <input type="hidden" value="1 Month" name="period">
                                            <input type="hidden" value="Standard" name="packageName">
                                            <input type="submit" name="btn" class="default-btn" value="Subscribe Now"><span></span>
                                        {!! Form::close() !!}
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 150 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-check-line"></i> Announcement</li>
                                        <li><i class="ri-check-line"></i> Product Promotion</li>
                                        <li><i class="ri-close-line"></i> <del>Delivery Management</del></li>
                                    </ul>

                                    <div class="popular-tag">
                                        <span>Most Popular</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table">
                                    <div class="plans-header">
                                        <h3>Premium</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-500 <span>/Month</span></div>

                                    <div class="plans-btn">
{{--                                        {!! Form::open(['url' => 'subscribe/new', 'method' => 'post']) !!}--}}
{{--                                            <input type="submit" name="btn" class="default-btn" value="Subscribe Now"><span></span>--}}
{{--                                            <input type="hidden" value="500" name="price">--}}
{{--                                            <input type="hidden" value="1 Month" name="month">--}}
{{--                                            <input type="hidden" value="Premium" name="package">--}}
{{--                                        {!! Form::close() !!}--}}
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 150 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-check-line"></i> Announcement</li>
                                        <li><i class="ri-check-line"></i> Product Promotion</li>
                                        <li><i class="ri-check-line"></i> Delivery Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="three-month" role="tabpanel" aria-labelledby="three-month-tab">
                    <div id="three-month" class="wrapper-full">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table">
                                    <div class="plans-header">
                                        <h3>Basic</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-500 <span>/3-Month</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 100 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-close-line"></i> <del>Announcement</del></li>
                                        <li><i class="ri-close-line"></i> <del>Product Promotion</del></li>
                                        <li><i class="ri-close-line"></i> <del>Delivery Management</del></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table active-box">
                                    <div class="plans-header">
                                        <h3>Standard</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-800 <span>/3-Month</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 150 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-check-line"></i> Announcement</li>
                                        <li><i class="ri-check-line"></i> Product Promotion</li>
                                        <li><i class="ri-close-line"></i> <del>Delivery Management</del></li>
                                    </ul>

                                    <div class="popular-tag">
                                        <span>Most Popular</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table">
                                    <div class="plans-header">
                                        <h3>Premium</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-1200 <span>/3-Month</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 150 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-check-line"></i> Announcement</li>
                                        <li><i class="ri-check-line"></i> Product Promotion</li>
                                        <li><i class="ri-check-line"></i> Delivery Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="six-month" role="tabpanel" aria-labelledby="six-month-tab">
                    <div id="three-month" class="wrapper-full">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table">
                                    <div class="plans-header">
                                        <h3>Basic</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-800 <span>/6-Month</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 100 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-close-line"></i> <del>Announcement</del></li>
                                        <li><i class="ri-close-line"></i> <del>Product Promotion</del></li>
                                        <li><i class="ri-close-line"></i> <del>Delivery Management</del></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table active-box">
                                    <div class="plans-header">
                                        <h3>Standard</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-1200 <span>/6-Month</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 150 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-check-line"></i> Announcement</li>
                                        <li><i class="ri-check-line"></i> Product Promotion</li>
                                        <li><i class="ri-close-line"></i> <del>Delivery Management</del></li>
                                    </ul>

                                    <div class="popular-tag">
                                        <span>Most Popular</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table">
                                    <div class="plans-header">
                                        <h3>Premium</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-1500 <span>/6-Month</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 150 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-check-line"></i> Announcement</li>
                                        <li><i class="ri-check-line"></i> Product Promotion</li>
                                        <li><i class="ri-check-line"></i> Delivery Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="one-year" role="tabpanel" aria-labelledby="one-year-tab">
                    <div id="three-month" class="wrapper-full">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table">
                                    <div class="plans-header">
                                        <h3>Basic</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-1200 <span>/Year</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 100 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-close-line"></i> <del>Announcement</del></li>
                                        <li><i class="ri-close-line"></i> <del>Product Promotion</del></li>
                                        <li><i class="ri-close-line"></i> <del>Delivery Management</del></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table active-box">
                                    <div class="plans-header">
                                        <h3>Standard</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-1500 <span>/Year</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 150 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-check-line"></i> Announcement</li>
                                        <li><i class="ri-check-line"></i> Product Promotion</li>
                                        <li><i class="ri-close-line"></i> <del>Delivery Management</del></li>
                                    </ul>

                                    <div class="popular-tag">
                                        <span>Most Popular</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-plans-table">
                                    <div class="plans-header">
                                        <h3>Premium</h3>
                                        <p>Powerful & Awesome Elements</p>
                                    </div>

                                    <div class="price">৳-2000 <span>/Year</span></div>

                                    <div class="plans-btn">
                                        <a href="#" class="default-btn">Subscribe Now <i class="ri-arrow-right-line"></i><span></span></a>
                                    </div>

                                    <ul class="plans-features-list">
                                        <li><i class="ri-check-line"></i> Up to 150 Products</li>
                                        <li><i class="ri-check-line"></i> Product Management</li>
                                        <li><i class="ri-check-line"></i> Order Management</li>
                                        <li><i class="ri-check-line"></i> Inventory Management</li>
                                        <li><i class="ri-check-line"></i> Gallery</li>
                                        <li><i class="ri-check-line"></i> Announcement</li>
                                        <li><i class="ri-check-line"></i> Product Promotion</li>
                                        <li><i class="ri-check-line"></i> Delivery Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Plans Area -->

    <!-- Start Partner Area -->
    <div class="partner-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Our Respected Clients</h2>
                <p>Which peoples loves us a lot, please check out what about says about us</p>
            </div>

            <div class="partner-slides owl-carousel owl-theme">
                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-1.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-2.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-3.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-4.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-5.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-1.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-2.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-3.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-4.png')}}" alt="image"></a>
                </div>

                <div class="single-partner">
                    <a href="#"><img src="{{asset('public/frontEnd/assets/images/partner/partner-5.png')}}" alt="image"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

@endsection