<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Chax - The King Maker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The King Makers Home Page" />
    <meta name="keywords" content="Chax, Forex, The King Maker, Money" />
    <meta name="author" content="" />
    <meta name="email" content="" />
    <meta name="website" content="/" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('website_asset/images/logo-icon.png') }}" />

    <!-- Css -->
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

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="{{ route('home') }}">
                <img src="{{ asset('website_asset/images/logo-dark.png') }}" height="80" class="logo-light-mode"
                    alt="" />
                <img src="{{ asset('website_asset/images/logo-light.png') }}" height="24" class="logo-dark-mode"
                    alt="" />
            </a>

            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item mb-0 pe-1">
                    <div class="dropdown">
                        <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-0"
                            style="width: 300px"></div>
                    </div>
                </li>

                <li class="list-inline-item sidebar-icon mb-0">
                    <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight">
                        <div class="btn btn-icon btn-soft-primary">
                            <i data-feather="user" class="fea icon-sm"></i>
                        </div>
                    </a>
                </li>

                <!-- <li class="list-inline-item button mb-0 ps-1">
          <a href="#" class="btn btn-icon btn-primary"
            ><i class="uil uil-github"></i
          ></a>
        </li> -->
            </ul>
            <!--end login button-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="{{ route('home') }}" class="sub-menu-item">Home</a></li>
                    <li>
                        <a href="{{ route('mentorship') }}" class="sub-menu-item">Mentorship </a>
                    </li>
                    <li>
                        <a href="{{ route('course') }}" class="sub-menu-item">Courses</a>
                    </li>
                    <li><a href="#" class="sub-menu-item">Signal</a></li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Find Us</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <!-- <li class="has-submenu parent-menu-item">
                <a href="javascript:void(0)"> Company </a
                ><span class="submenu-arrow"></span>
                <ul class="submenu">
                  <li>
                    <a href="page-aboutus.html" class="sub-menu-item">
                      About Us</a
                    >
                  </li>
                  <li>
                    <a href="page-aboutus-two.html" class="sub-menu-item">
                      About Us Two
                    </a>
                  </li>
                  <li>
                    <a href="page-services.html" class="sub-menu-item"
                      >Services</a
                    >
                  </li>
                  <li>
                    <a href="page-history.html" class="sub-menu-item"
                      >History
                    </a>
                  </li>
                  <li>
                    <a href="page-team.html" class="sub-menu-item"> Team</a>
                  </li>
                  <li>
                    <a href="page-pricing.html" class="sub-menu-item"
                      >Pricing</a
                    >
                  </li>
                </ul>
              </li> -->

                            <li>
                                <a href="{{ route('contact') }}" class="sub-menu-item">Contact </a>
                            </li>

                            <li>
                                <a href="{{ route('faq') }}" class="sub-menu-item">FAQ </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="vh-100 d-flex align-items-center"
        style="
        background: url(' {{ asset('website_asset/images/digital/contact-page.jpeg') }}') center center;
      ">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                    <div class="title-heading mt-5 pt-4">
                        <h1 class="heading">Let's talk about your financial goals</h1>
                        <p class="text-dark">
                            <span class="text-primary fw-bold"></span> Don't hesitate to get
                            in touch with us..
                        </p>

                        {{-- <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Email</h5>
                                <a href="mailto:contact@example.com" class="text-primary">contact@chax.com</a>
                            </div>
                        </div>

                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Phone</h5>
                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                            </div>
                        </div> --}}

                        <ul class="list-unstyled social-icon mb-0 mt-4">

                            <li class="list-inline-item">
                                        <a href="https://instagram.com/chaxbtbg?igshid=MjEwN2IyYWYwYw==" class="rounded"><i
                                          class="uil uil-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                        <a href="https://twitter.com/chaxbtbg?s=20" class="rounded"><i
                                          class="uil uil-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://youtube.com/@CHAXBTBG?si=JOIb5b5Ftj8CZd_4" class="rounded"><i
                                        class="uil uil-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://wa.link/p5vyor" class="rounded"><i class="uil uil-whatsapp"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://t.me/CHAXKM" class="rounded"><i class="uil uil-telegram"></i></a>
                            </li>
                        </ul>
                        <!--end icon-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->


    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('website_asset/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('website_asset/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('website_asset/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('website_asset/js/plugins.init.js') }}"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('website_asset/js/app.js') }}"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>
