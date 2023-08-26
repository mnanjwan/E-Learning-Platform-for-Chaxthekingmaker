<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Chax Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Login Panel">
    <meta name="Version" content="v4.7.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('website_asset/images/logo-icon.png') }}" />

    <!-- Css -->
    <link href="{{ asset('website_asset/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('website_asset/css/bootstrap.min.css') }}" id="bootstrap-style" class="theme-opt"
        rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('website_asset/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('website_asset/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('website_asset/css/style.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet"
        type="text/css" />
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

    <section class="bg-home d-flex align-items-center position-relative"
        style="background: url('assets/images/shape01.png') center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card form-signin p-4 rounded shadow">
                        <form action="{{ route('admin-login') }}" method="post">
                            @csrf
                            <center>
                                <a href="{{ route('home') }}"><img src="{{ asset('user_asset/images/logo.png') }}"
                                        width="50%" class="" alt=""></a>
                            </center> <br>
                            <h5 class="mb-3 text-center">Admin Login</h5>
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
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" name="password"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                {{-- <p class="forgot-pass mb-0"><a href="auth-bs-reset.html" class="text-dark small fw-bold">Forgot password ?</a></p> --}}
                            </div>

                            <button class="btn btn-primary w-100" type="submit">Sign in</button>


                            <p class="mb-0 text-muted mt-3 text-center">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> .
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

</html>
