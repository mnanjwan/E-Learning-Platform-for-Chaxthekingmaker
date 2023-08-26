<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>{{$page_title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{$page_description ??  " Chax the King Maker"}}" />
    <meta name="keywords" content="Chax, Forex, The King Maker, Money" />
    <meta property="og:image" content="https://chaxthekingmaker.com/website_asset/images/logo-dark.png" />
    <meta name="author" content="" />
    <meta name="email" content="" />
    <meta name="website" content="/" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('website_asset/images/logo-icon.png')}}" />

    <!-- Css -->
    <!-- Bootstrap Css -->
    <link href="{{asset('website_asset/css/bootstrap.min.css')}}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
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
            <a class="logo" href="{{route('home')}}">
                <img src="{{ asset('website_asset/images/logo-dark.png')}}" height="80" class="logo-light-mode" alt="" />
                <img src="{{ asset('website_asset/images/logo-light.png')}}" height="24" class="logo-dark-mode" alt="" />
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
                    <li><a href="{{route('home')}}" class="sub-menu-item">Home</a></li>
                    <li>
                        <a href="{{route('mentorship')}}" class="sub-menu-item">Mentorship & Signal</a>
                    </li>
                    <li>
                        <a href="{{route('course')}}" class="sub-menu-item">Courses</a>
                    </li>
                    <li><a href="#" class="sub-menu-item">About Chax</a></li>

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
                                <a href="{{route('contact')}}" class="sub-menu-item">Contact </a>
                            </li>

                            <li>
                                <a href="{{route('faq')}}" class="sub-menu-item">FAQ </a>
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

    @yield('content')

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="{{asset('website_asset/images/logo-light.png')}}" height="100" alt="" />
                                </a>
                                <p class="mt-4">
                                    Turning data into knowledge and knowledge into decisions and
                                    decisions into financial freedom #FinancialMarkets My name
                                    is CHAX and I make kings.
                                </p>
                                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                    <li class="list-inline-item mb-0">
                                        <a href="" target="_blank" class="rounded"><i
                                                class="uil uil-facebook-f align-middle" title="facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <a href="" target="_blank" class="rounded"><i
                                                class="uil uil-instagram align-middle" title="instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <a href="" target="_blank" class="rounded"><i
                                                class="uil uil-twitter align-middle" title="twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <a href="mailto:" class="rounded"><i class="uil uil-envelope align-middle"
                                                title="email"></i></a>
                                    </li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Quick links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li>
                                        <a href="#" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> About us</a>
                                    </li>
                                    <li>
                                        <a href="{{route('mentorship')}}" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i>
                                            Mentorship</a>
                                    </li>

                                    <li>
                                        <a href="{{route('user-login')}}" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Login</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Usefull Links</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li>
                                        <a href="#" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Terms of
                                            Services</a>
                                    </li>
                                    <li>
                                        <a href="{{route('faq')}}" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Newsletter</h5>
                                <p class="mt-4">
                                    Sign up and receive the latest tips via email.
                                </p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="foot-subscribe mb-3">
                                                <label class="form-label">Write your email
                                                    <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="email" name="email" id="emailsubscribe"
                                                        class="form-control ps-5 rounded" placeholder="Your email : "
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-grid">
                                                <input type="submit" id="submitsubscribe" name="send"
                                                    class="btn" style="background-color: white;"
                                                    value="Subscribe" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Modal Content Start -->
    {{-- <div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded shadow-lg border-0 overflow-hidden position-relative">
                <button type="button" class="btn-close position-absolute top-0 end-0 mt-2 me-2" style="z-index: 1"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="container-fluid px-0">
                        <div class="row align-items-center g-0">
                            <div class="col-lg-6 col-md-5">
                                <img src="{{asset('website_asset/images/course/online/ab02.jpg')}}" class="img-fluid" alt="" />
                            </div>
                            <!--end col-->

                            <div class="col-lg-6 col-md-7">
                                <form class="login-form p-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email
                                                    <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input type="email" class="form-control ps-5"
                                                        placeholder="Email" name="email" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Password <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" name="password" class="form-control ps-5"
                                                        placeholder="Password" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div class="mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck1" />
                                                        <label class="custom-control-label"
                                                            for="customCheck1">Remember me</label>
                                                    </div>
                                                </div>
                                                <p class="forgot-pass mb-0">
                                                    <a href="auth-re-password.html" class="text-dark fw-bold">Forgot
                                                        password ?</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-12 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3">
                                                <small class="text-dark me-2">Don't have an account ?</small>
                                                <a href="mentorship.html" class="text-dark fw-bold">Sign Up</a>
                                            </p>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Modal Content End -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-4 border-bottom">
            <h5 id="offcanvasRightLabel" class="mb-0">
                <img src="{{asset('website_asset/images/logo-dark.png')}}" height="24" class="light-version" alt="" />
                <img src="{{asset('website_asset/images/logo-light.png')}}" height="24" class="dark-version" alt="" />
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="uil uil-times fs-4"></i>
            </button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('website_asset/images/contact.svg')}}" class="img-fluid d-block mx-auto" alt="" />
                    <div class="card border-0 mt-4" style="z-index: 1">
                        <div class="card-body p-0">
                            <h4 class="card-title text-center">Login</h4>
                            <form class="login-form mt-4" action="{{route('user-login')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="email" name="email" class="form-control ps-5"
                                                    placeholder="Email" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" name="password" class="form-control ps-5"
                                                    placeholder="Password" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />
                                                    <label class="form-check-label" for="flexCheckDefault">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <p class="forgot-pass mb-0">
                                                <a href="auth-cover-re-password.html" class="text-dark fw-bold">Forgot
                                                    password ?</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Sign in</button>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3">
                                            <small class="text-dark me-2">Don't have an account ?</small>
                                            <a href="{{route('mentorship')}}" class="text-dark fw-bold">Sign Up</a>
                                        </p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas-footer p-4 border-top text-center">
            <ul class="list-unstyled social-icon social mb-0">
                <li class="list-inline-item mb-0">
                    <a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i
                            class="uil uil-facebook-f align-middle" title="facebook"></i></a>
                </li>
                <li class="list-inline-item mb-0">
                    <a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i
                            class="uil uil-instagram align-middle" title="instagram"></i></a>
                </li>
                <li class="list-inline-item mb-0">
                    <a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i
                            class="uil uil-twitter align-middle" title="twitter"></i></a>
                </li>
            </ul>
            <!--end icon-->
        </div>
    </div>
    <!-- Offcanvas End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{asset('website_asset/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- SLIDER -->
    <script src="{{asset('website_asset/libs/tiny-slider/min/tiny-slider.js')}}"></script>
    <!-- Main Js -->
    <script src="{{asset('website_asset/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('website_asset/js/plugins.init.js')}}"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{asset('website_asset/js/app.js')}}"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>


</html>
