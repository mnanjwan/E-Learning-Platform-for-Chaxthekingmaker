<!doctype html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <title>Chax Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chax student Login ">
    <meta name="Version" content="v4.7.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('website_asset/images/logo-icon.png')}}">

    <!-- Css -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('website_asset/css/bootstrap.min.css') }}" id="bootstrap-style" class="theme-opt"
        rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('website_asset/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('website_asset/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{ asset('website_asset/css/style.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet"
        type="text/css">

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->


    <div class="back-to-home">
        <a href="#" class="back-button btn btn-icon btn-primary"><i data-feather="arrow-left"
                class="icons"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="cover-user">
        <div class="container-fluid px-0">
            <div class="row g-0 position-relative">
                <div class="col-lg-4 cover-my-30 order-2">
                    <div class="cover-user-img d-flex align-items-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="card login-page border-0" style="z-index: 1">
                                    <div class="text-center pt-3 pb-4">
                                        <a href="{{ route('home') }}" class="logo"><img
                                                src="{{ asset('user_asset/images/logo.png') }}" alt="logo"
                                                width="60%  " /></a>
                                    </div>
                                    <div class="card-body p-0">
                                        <h4 class="card-title text-center">Login</h4>
                                        @if (session()->has('errors'))
                                            <div class="alert alert-danger">

                                                {{ session()->get('errors')->first() }}
                                            </div>
                                        @endif
                                        @if (session()->has('success'))
                                            <div class="alert alert-success">

                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        <form class="login-form mt-4" action="{{ route('user-login') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Your Email <span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                                            <input type="email" class="form-control ps-5"
                                                                placeholder="Email" name="email" required="">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Password <span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                                            <input type="password" class="form-control ps-5"
                                                                name="password" placeholder="Password" required="">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label"
                                                                    for="flexCheckDefault">Remember me</label>
                                                            </div>
                                                        </div>
                                                        <p class="forgot-pass mb-0"><a href="$"
                                                                class="text-dark fw-bold">Forgot password ?</a></p>
                                                    </div>
                                                </div><!--end col-->

                                                <div class="col-lg-12 mb-0">
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary">Sign in</button>
                                                    </div>
                                                </div><!--end col-->



                                                <div class="col-12 text-center">
                                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an
                                                            account ?</small> <a href="{{ route('mentorship') }}"
                                                            class="text-dark fw-bold">Sign Up</a></p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </form>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div> <!-- end about detail -->
                </div> <!-- end col -->

                <div class="col-lg-8 offset-lg-4 padding-less img order-1 jarallax" data-jarallax data-speed="0.5"
                    style="background-image:url('{{ asset('website_asset/images/digital/about.jpeg') }}')"></div>
                <!-- end col -->
            </div><!--end row-->
        </div><!--end container fluid-->
    </section><!--end section-->
    <!-- Hero End -->


    <!-- Switcher End -->

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('website_asset/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('website_asset/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('website_asset/js/plugins.init.js') }}"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('website_asset/js/app.js') }}"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

<!-- Mirrored from shreethemes.in/landrick/landing/auth-cover-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2023 11:01:17 GMT -->

</html>
