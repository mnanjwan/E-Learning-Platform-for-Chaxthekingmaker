@extends('website.layouts.master')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="title-heading">
                        <h1 class="fw-bold mt-2 mb-3">
                            Turning the financial market <br />
                            into an 'Easy Peasy'
                        </h1>
                        <p class="para-desc text-muted">
                            Turning data into knowledge and knowledge into decisions and
                            decisions into financial freedom #FinancialMarkets My name is
                            CHAX and I make kings.
                        </p>
                        <div class="mt-4 pt-2">
                            <a href="{{route('mentorship')}}" class="btn btn-primary me-2">Get Started</a>
                            <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Documentation</a> -->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{ asset('website_asset/images/digital/about.jpeg') }}" class="img-fluid d-block mx-auto"
                        alt="" />
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <div
                                class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                <div class="card-body p-0">
                                    <img src="{{ asset('website_asset/images/course/online/ab01.png') }}" class="img-fluid"
                                        alt="work-image" />
                                    <div class="overlay-work"></div>
                                    <div class="content">
                                        <a href="javascript:void(0)"
                                            class="title text-white d-block fw-bold">Experienced</a>
                                        <small class="text-white-50">...</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-6 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <div
                                        class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img src="{{ asset('website_asset/images/course/online/ab02.png') }}"
                                                class="img-fluid" alt="work-image" />
                                            <div class="overlay-work"></div>
                                            <div class="content">
                                                <a href="javascript:void(0)"
                                                    class="title text-white d-block fw-bold">Disciplined</a>
                                                <small class="text-white-50">...</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                    <div
                                        class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img src="{{ asset('website_asset/images/course/online/ab03.png') }}"
                                                class="img-fluid" alt="work-image" />
                                            <div class="overlay-work"></div>
                                            <div class="content">
                                                <a href="javascript:void(0)"
                                                    class="title text-white d-block fw-bold">Patient</a>
                                                <small class="text-white-50">...</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div class="ms-lg-4">
                        <div class="section-title">
                            <span class="badge bg-soft-primary rounded-pill fw-bold">About us</span>
                            <h4 class="title mb-4 mt-3">
                                We teach you to access <br />
                                and employ strategic analysis for consistent profitability.
                            </h4>
                            <p class="text-muted para-desc">
                                Start working with
                                <span class="text-primary fw-bold">The King Maker,</span>
                                today is the tomorrow you said.
                            </p>
                        </div>

                        <div class="mt-4 pt-2">
                            <a href="" target="_blank" class="btn btn-primary m-1">Read More <i
                                    class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <!-- Popular Course Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Courses</h4>
                        <h5 class="mb-0 fw-normal text-muted">Learn from the best course that teaches you the in and
                            our of the forex market.</h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('website_asset/images/course/10.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="overlay"></div>


                        </div>
                        <div class="position-relative">
                            <div class="shape overflow-hidden text-color-white">
                                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body content">
                            <h6><a href="{{ route('course') }}" class="text-primary">Beginners</a></h6>
                            <a href="{{ route('course') }}" class="title text-dark h5">Introduction to Forex trading</a>
                            <p class="text-muted mt-2">Explore Forex trading basics: currency pairs, exchange rates,
                                market hours. Learn strategies, risk management, and factors influencing markets. Start your
                                journey into global currency trading</p>
                            <a href="{{ route('course') }}" class="text-primary">Read More <i
                                    class="uil uil-angle-right-b align-middle"></i></a>
                           
                        </div>
                    </div> <!--end card / course-blog-->
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('website_asset/images/course/20.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="overlay"></div>


                        </div>
                        <div class="position-relative">
                            <div class="shape overflow-hidden text-color-white">
                                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body content">
                            <h6><a href="{{ route('course') }}" class="text-primary">Intermidiate</a></h6>
                            <a href="{{ route('course') }}" class="title text-dark h5">Essentials in Forex trading</a>
                            <p class="text-muted mt-2">Master Forex essentials: currency pairs, price movements, chart
                                analysis. Develop strategies, understand risk management, and navigate the dynamic world of
                                foreign exchange trading.</p>
                            <a href="{{ route('course') }}" class="text-primary">Read More <i
                                    class="uil uil-angle-right-b align-middle"></i></a>
                           
                        </div>
                    </div> <!--end card / course-blog-->
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('website_asset/images/course/30.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="overlay"></div>


                        </div>
                        <div class="position-relative">
                            <div class="shape overflow-hidden text-color-white">
                                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body content">
                            <h6><a href="{{route('course')}}" class="text-primary">Advance</a></h6>
                            <a href="{{route('course')}}" class="title text-dark h5">Ultimate Key to Forex trading</a>
                            <p class="text-muted mt-2">Unlock Forex success: master technical analysis, chart patterns,
                                risk control. Gain insights into global markets, leverage, and strategies for confident,
                                profitable currency trading.</p>
                            <a href="{{route('course')}}" class="text-primary">Read More <i
                                    class="uil uil-angle-right-b align-middle"></i></a>
                           
                        </div>
                    </div> <!--end card / course-blog-->
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
        <!-- Popular Course End -->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Our Mentorship Plan</h4>
                        <h5 class="mb-0 fw-normal text-muted">Join <span class="text-success fw-bold"><span class="counter-value" data-target="325">1</span>+</span> students enrolled in <span class="fw-bold text-primary">The Kings Maker</span> Mentorship, to attain mastery in the Financial institue</h5>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card pricing pricing-primary business-rate border-0 p-4 rounded-md shadow">
                        <div class="card-body p-0">
                            <span class="py-2 px-4 d-inline-block bg-soft-primary h6 mb-0 text-primary rounded-lg">One
                                Year</span>
                            <h2 class="fw-bold mb-0 mt-3">$500.00</h2>
                            <p class="text-muted"></p>

                            <p class="text-muted">
                                Unrestricted entry to complimentary Forex materials and
                                courses at the commencement of your Forex voyage.
                            </p>

                            <ul class="list-unstyled pt-3 border-top">
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Personal Contact to
                                    Mentor
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Access to study portal
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>My
                                    Live Signals and
                                    Trades ideas
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Risk
                                    Management
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>How
                                    to Pass All Prop
                                    Firm
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Psychology
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"></span>
                                </li>
                            </ul>
                            
                            <div class="mt-4">
                                <div class="d-grid">
                                    <a class="btn btn-primary"
                                        href="{{ route('checkout', ['price' => '500', 'mentorship' => 'One year mentorship']) }}">Enroll</a>
                                </div>
                                <p class="text-muted mt-3 mb-0">*No credit card required</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card pricing pricing-primary business-rate border-0 p-4 rounded-md shadow">
                        <div class="ribbon ribbon-right ribbon-warning overflow-hidden">
                            <span class="text-center d-block shadow small h6">Best</span>
                        </div>
                        <div class="card-body p-0">
                            <span class="py-2 px-4 d-inline-block bg-soft-primary h6 mb-0 text-primary rounded-lg">Life
                                time</span>
                            <h2 class="fw-bold mb-0 mt-3">$1000.00</h2>
                            <p class="text-muted"></p>

                            <p class="text-muted">
                                Unrestricted entry to complimentary Forex materials and
                                courses at the commencement of your Forex voyage.
                            </p>

                            <ul class="list-unstyled pt-3 border-top">
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>2
                                    live zoom session
                                    per week
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>
                                    Access to study portal
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Personal Contact to
                                    Mentor
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>My
                                    Live Signals and
                                    Trades ideas
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Risk Management
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>How
                                    to Pass All Prop
                                    Firm
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Psychology
                                </li>
                            </ul>

                            <div class="mt-4">
                                <div class="d-grid">
                                    <a class="btn btn-primary"
                                        href="{{ route('checkout', ['price' => '1000', 'mentorship' => 'Life time mentorship']) }}">Enroll</a>
                                </div>
                                <p class="text-muted mt-3 mb-0">*No credit card required</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-md-5">
            <div class="row justify-content-center" id="counter">
                <div class="col-lg-8 col-md-10">
                    <div class="mb-4 pb-2 text-center">
                        <h5 class="mb-0 fw-normal text-muted"></span> Connect with <span class="fw-bold text-primary">CHAX THE KING MAKER</span> </h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 pb-md-4">
                    <ul class="text-center mb-0 p-0">
                        <li class="list-inline-item mx-2 mt-3"><a href="https://instagram.com/chaxbtbg?igshid=MjEwN2IyYWYwYw==" target="_blank" class="btn btn-icon btn-pills btn-lg btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i data-feather="instagram" class="icons"></i></a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="https://twitter.com/chaxbtbg?s=20" target="_blank" class="btn btn-icon btn-pills btn-lg btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i data-feather="twitter" class="icons"></i></a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="https://youtube.com/@CHAXBTBG?si=JOIb5b5Ftj8CZd_4" target="_blank" class="btn btn-icon btn-pills btn-lg btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i data-feather="youtube" class="icons"></i></a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="https://wa.link/p5vyor" target="_blank" class="btn btn-icon btn-pills btn-lg btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"><i class="mdi mdi-whatsapp"></i></a></li>
                        <li class="list-inline-item mx-2 mt-3"><a href="https://t.me/CHAXKM" target="_blank" class="btn btn-icon btn-pills btn-lg btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Telegram"><i class="uil uil-telegram"></i></a></li>
                    </ul>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="rounded bg-primary bg-gradient p-lg-5 p-4">
                <div class="row align-items-end">
                    <div class="col-md-3">
                        <div class="section-title text-md-start text-center">
                            <h4 class="title mb-3 text-white title-dark">
                                We offer the best signals
                            </h4>
                            <p class="text-white-50 mb-0">
                                Stay profitable by gaining access to our trading Signals.
                            </p>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-md-3">
                        <div class="section-title text-md-start text-center">
                            <ul class="feature list-inline">
                                <li class="h6 mb-0" style="color: white">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>3
                                    months signals
                                </li>
                                <li class="h6 mb-0" style="color: white">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>6
                                    months signals
                                </li>
                                <li class="h6 mb-0" style="color: white">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>12
                                    months signals
                                </li>
                            </ul>

                            <!-- <p class="text-white-50 mb-0">Stay profitable by gaining access to our trading Signals.</p> -->
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-3">
                        <div class="section-title text-md-start text-center">
                            <ul class="feature list-inline">
                                <li class="h6 mb-0" style="color: white">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Premium Monthly
                                    Signals
                                </li>
                                <li class="h6 mb-0" style="color: white">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>0 -
                                    4 trades Weekly
                                </li>
                                <li class="h6 mb-0" style="color: white">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Risk Management
                                </li>
                                <li class="h6 mb-0" style="color: white">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>80
                                    - 90% Accuracy
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-3 mt-4 mt-sm-0">
                        <div class="text-md-end text-center">
                            <a href="" class="btn btn-light">Get Out Signals</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Students Testimonies</h4>
                        <h5 class="mb-0 fw-normal text-muted">Empowered by knowledge, I transformed challenges into stepping
                            stones on my journey of learning.</h5>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-10 mt-4 pt-2">
                    <div class="row g-3" id="grid">
                        <div class="col-lg-4 col-md-6 picture-item">
                            <div
                                class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                                <div class="card-body p-0">
                                    <img src="{{ asset('website_asset/images/testimony/tes1.jpeg') }}" class="img-fluid"
                                        alt="testimony-image" />
                                    <div class="overlay"></div>
                                    <div class="icons text-center">
                                        <a href="{{ asset('website_asset/images/testimony/tes1.jpeg') }}"
                                            class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-4 col-md-6 picture-item">
                            <div
                                class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                                <div class="card-body p-0">
                                    <img src="{{ asset('website_asset/images/testimony/tes2.jpeg') }}" class="img-fluid"
                                        alt="testimony-image" />
                                    <div class="overlay"></div>
                                    <div class="icons text-center">
                                        <a href="{{ asset('website_asset/images/testimony/tes2.jpeg') }}"
                                            class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-4 col-md-6 picture-item">
                            <div
                                class="card border-0 work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                                <div class="card-body p-0">
                                    <img src="{{ asset('website_asset/images/testimony/tes4.jpeg') }}" class="img-fluid"
                                        alt="testimony-image" />
                                    <div class="overlay"></div>
                                    <div class="icons text-center">
                                        <a href="{{ asset('website_asset/images/testimony/tes4.jpeg') }}"
                                            class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i
                                                data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="text-center mt-4">
                        <a href="#" class="text-primary">read more <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">
                            Want to be among the first to find out?
                        </h4>
                        <p class="text-muted para-desc mx-auto">
                            Start working with
                            <span class="text-primary fw-bold">The King Maker</span> Signup
                            to our newsletters.
                        </p>

                        <div class="subcribe-form mt-4 pt-2">
                            <form>
                                <input type="email" id="email2" name="email" class="rounded-pill border"
                                    placeholder="E-mail :" />
                                <button type="submit" class="btn btn-pills btn-primary">
                                    Get Started
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section"
        style="background: url('{{ asset('website_asset/images/digital/about.jpeg') }}') top center">
        <div class="bg-overlay bg-linear-gradient-2"></div>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="section-title">
                        <h4 class="title text-white title-dark mb-4">
                            Don't pass up the opportunity, make sure to subscribe to our
                            YouTube channel
                        </h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="text-md-end">
                        <a href="https://youtube.com/@CHAXBTBG?si=JOIb5b5Ftj8CZd_4" class="btn btn-danger"><i class="uil uil-youtube"></i> Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
@endsection
