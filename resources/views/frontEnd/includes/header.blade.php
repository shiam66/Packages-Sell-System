    <header class="main-header-area">

        <!-- Start Top Header Area -->
        <div class="header-information">Header Information</div>

        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <ul class="top-header-content">
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:+8801981893135">+88 01981 893135</a>
                            </li>

                            <li>
                                <i class="ri-earth-line"></i>
                                <a href="mailto:hello.me@company.com">hello.me@name.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <ul class="top-header-optional">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="ri-messenger-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-box-style">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{asset('public/frontEnd/assets/images/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('public/frontEnd/assets/images/logo.png')}}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link active">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#about" class="nav-link">About Us</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#services" class="nav-link">Services</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#pricing" class="nav-link">Pricing</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#contact" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    {!! Form::open(['url' => 'subscribe/new', 'method' => 'POST']) !!}
                                        <input type="hidden" value="0" name="amount">
                                        <input type="hidden" value="3 Days" name="period">
                                        <input type="hidden" value="Free" name="packageName">
                                        <input type="submit" name="btn" class="default-btn" value="Free Subscription"><span></span>
                                    {!! Form::close() !!}
                                </div>

                                <div class="option-item">
                                    <div class="side-menu-btn">
                                        <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="request_submit.html" class="default-btn">Free Subscription <i class="ri-message-line"></i><span></span></a>
                                </div>

                                <div class="option-item">
                                    <div class="side-menu-btn">
                                        <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

    </header>
