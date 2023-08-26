<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Dashboard - Chaxthekingmaker </title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('user_asset/images/logo-icon.png') }}" />

    <!-- inject:css -->
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

  

    @yield('content')

    <!-- start scroll top -->
    <div id="scroll-top">
        <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <!-- template js files -->
    <script src="{{ asset('user_asset/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/isotope.js') }}"></script>
    <script src="{{ asset('user_asset/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/fancybox.js') }}"></script>
    <script src="{{ asset('user_asset/js/chart.js') }}"></script>
    <script src="{{ asset('user_asset/js/doughnut-chart.js') }}"></script>
    <script src="{{ asset('user_asset/js/bar-chart.js') }}"></script>
    <script src="{{ asset('user_asset/js/line-chart.js') }}"></script>
    <script src="{{ asset('user_asset/js/datedropper.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/emojionearea.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/animated-skills.js') }}"></script>
    <script src="{{ asset('user_asset/js/jquery.MultiFile.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/main.js') }}"></script>
</body>


</html>
