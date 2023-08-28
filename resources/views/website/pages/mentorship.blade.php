@extends('website.layouts.master')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100"
        style="background: url('{{ asset('website_asset/images/digital/contact.jpeg') }}') top center">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0" style="color: white">
                            Mentorship & Signal Plan
                        </h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item" active><a href="#">mentorship</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Price Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Mentorship Plan</h4>
                        <h5 class="mb-0 fw-normal text-muted">Join <span class="text-success fw-bold"><span
                                    class="counter-value" data-target="325">1</span>+</span> students enrolled in <span
                                class="fw-bold text-primary">The Kings Maker</span> Mentorship, to attain mastery in the
                            Financial institue</h5>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-2 col-md-6 mt-4 pt-2"></div>

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
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>2
                                    live zoom session per week
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Personal Contact to Mentor
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Access to study portal
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Risk
                                    Management
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>How
                                    to Pass All Prop Firm
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Psychology
                                </li>
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
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>3
                                    live zoom session per week
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Access to study portal
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Personal Contact to Mentor
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>My
                                    Live Signals and Trades ideas
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Risk
                                    Management
                                </li>
                                <li class="h6 text-muted mb-0">
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>How
                                    to Pass All Prop Firm
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

                <div class="col-lg-2 col-md-6 mt-4 pt-2"></div>

                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

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
                                    <span class="icon h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>1
                                    months signals
                                </li>
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
                                            class="uil uil-check-circle align-middle"></i></span>Premium Monthly Signals
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
                            <a href="{{route('signal')}}" class="btn btn-light">Get Out Signals</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Testi End -->

    <!-- FAQ n Contact Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                        <p class="text-muted para-desc mx-auto">
                            Reach out to our team
                        </p>
                        <div class="mt-4 pt-2">
                            <a href="{{ route('contact') }}" class="btn btn-primary">Contact us <i
                                    class="mdi mdi-arrow-right"></i></a>
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
    <!-- FAQ n Contact End -->
@endsection
