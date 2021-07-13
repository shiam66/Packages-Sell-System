<!doctype html>
<html lang="zxx" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/responsive.css')}}">

    <title>Subscribe Form</title>

    <link rel="icon" type="image/png" href="{{asset('public/frontEnd/assets/images/favicon.png')}}">
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>
    <style>
        /*.p{*/
        /*    background-color: #F7B431;*/
        /*    background-color: #00ACEE;*/
        /*    background-color: #0071A7;*/
        /*}*/
    </style>

    <!-- End Preloader Area -->

    <section class="sm_blank_pg">
        <!-- Start Contact Area -->
        <div class="contact-area sm-contactarea" style="padding-top: 30px; padding-bottom: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center" style="padding-bottom: 15px;">
                        <a href="{{ url('/') }}" title="Go to Home Page"><img src="{{asset('public/frontEnd/assets/images/logo.png') }}" class=""/></a>
                    </div>

                    <div class="col-md-12">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="margin-bottom: 30px;">Subscription Form</h3>
                                </div>
                            </div>

                            {!! Form::open(['url' => '/subscribe/add', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control">
                                            <span class="text-danger">{{  $errors->has('name') ? $errors->first('name'): '' }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Company Name <span class="text-danger">*</span></label>
                                            <input type="text" name="companyName" class="form-control">
                                            <span class="text-danger">{{  $errors->has('companyName') ? $errors->first('companyName'): '' }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" name="phoneNumber" class="form-control" placeholder="01...">
                                            <span class="text-danger">{{  $errors->has('phoneNumber') ? $errors->first('phoneNumber'): '' }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control">
                                            <span class="text-danger">{{  $errors->has('email') ? $errors->first('email'): '' }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Address <span class="text-danger">*</span></label>
                                            <input type="text" name="address" class="form-control">
                                            <span class="text-danger">{{  $errors->has('address') ? $errors->first('address'): '' }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Page Name</label>
                                            <input type="text" name="pageName" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Trade Licence Number</label>
                                            <input type="text" name="tradeLicence" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Upload Your Photo <span class="text-danger">*</span></label>
                                            <input type="file" name="userPhoto" class="form-control">
                                            <span class="text-danger">{{  $errors->has('userPhoto') ? $errors->first('userPhoto'): '' }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Upload NID Card <span class="text-danger">*</span></label>
                                            <input type="file" name="nidCard" class="form-control">
                                            <span class="text-danger">{{  $errors->has('nidCard') ? $errors->first('nidCard'): '' }}</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Package</label>
                                            <input type="text" name="packageName" class="form-control" readonly value="{{ $packageName }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Period</label>
                                            <input type="text" name="period" class="form-control" readonly value="{{ $period }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label text-left">Amount</label>
                                            <input type="text" name="amount" class="form-control" readonly value="TK: {{ $amount }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <input type="submit" class="default-btn" name="btn" value="Subscription Now">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Contact Area -->
    </section>

    <!-- All Jquery -->
    <script src="{{asset('public/frontEnd/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/fancybox.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/scrollbar.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/horizontal-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/main.js')}}"></script>
</body>
</html>

