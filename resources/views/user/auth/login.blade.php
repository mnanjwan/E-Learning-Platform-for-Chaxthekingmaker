<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 00:44:55 GMT -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Aduca - Education HTML Template</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('user_asset/css/tooltipster.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('user_asset/css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('user_asset/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}" />
    <!-- end inject -->


</head>

<body>

    <!-- start cssload-loader -->
    <div class="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5">
                </circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!-- ================================
       START CONTACT AREA
================================= -->
    <section class="contact-area section--padding position-relative">
        <span class="ring-shape ring-shape-1"></span>
        <span class="ring-shape ring-shape-2"></span>
        <span class="ring-shape ring-shape-3"></span>
        <span class="ring-shape ring-shape-4"></span>
        <span class="ring-shape ring-shape-5"></span>
        <span class="ring-shape ring-shape-6"></span>
        <span class="ring-shape ring-shape-7"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title text-center fs-24 lh-35 pb-4">Login to Your Account!</h3>
                            <div class="section-block"></div>
                            <form action="{{route('user-login')}}" method="post" class="pt-4">
@csrf
                                <div class="text-center pt-3 pb-4">
                                    <a href="{{ route('home') }}" class="logo"><img
                                            src="{{ asset('user_asset/images/logo.png') }}" alt="logo"
                                            width="50%" /></a>
                                </div>
                                <div class="input-box">
                                    <label class="label-text">Email</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="email"
                                            placeholder="Email">
                                        <span class="la la-user input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="input-group mb-3">
                                        <span class="la la-lock input-icon"></span>
                                        <input class="form-control form--control password-field" type="password"
                                            name="password" placeholder="Password">
                                        <div class="input-group-append">
                                            <button class="btn theme-btn theme-btn-transparent toggle-password"
                                                type="button">
                                                <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px"
                                                    viewBox="0 0 24 24" width="22px" fill="#7f8897">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z" />
                                                </svg>
                                                <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px"
                                                    viewBox="0 0 24 24" width="22px" fill="#7f8897">
                                                    <path
                                                        d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z"
                                                        fill="none" />
                                                    <path
                                                        d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box">
                                    <div class="d-flex align-items-center justify-content-between pb-4">
                                        <div class="custom-control custom-checkbox fs-15">
                                            <input type="checkbox" class="custom-control-input"
                                                id="rememberMeCheckbox" required>
                                            <label class="custom-control-label custom--control-label"
                                                for="rememberMeCheckbox">Remember Me</label>
                                        </div><!-- end custom-control -->
                                        <a href="#" class="btn-text">Forgot my password?</a>
                                    </div>
                                    <button class="btn theme-btn" type="submit">Login Account <i
                                            class="la la-arrow-right icon ml-1"></i></button>
                                    <p class="fs-14 pt-2">Don't have an account? <a href="{{ route('mentorship') }}"
                                            class="text-color hover-underline">Register</a></p>
                                </div><!-- end btn-box -->
                            </form>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-7 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
       END CONTACT AREA
================================= -->

    <!-- template js files -->
    <script src="{{ asset('user_asset/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/waypoint.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/main.js') }}"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 00:44:55 GMT -->

</html>
