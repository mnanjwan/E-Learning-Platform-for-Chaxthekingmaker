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
                            Market Signal Plan
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
                        <li class="breadcrumb-item" active><a href="#">Signal</a></li>
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


    <!-- CTA START -->
    <section class="section">
        <div class="container">
            <div class="card bg-light rounded border-0 overflow-hidden">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6" >
                        <video width="640" height="360" >
                            <source src="{{asset('website_asset/video/signal/chaxbtbg.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                          </video>
                    </div><!--end col-->

                    <div class="col-lg-6 text-center">
                        <div class="card-body section-title p-md-5">
                            <a href="" data-type="youtube" data-id="yba7hPeTSjk"
                                class="play-btn mt-0 text-center lightbox">
                                <i data-feather="play" class="fea icon-ex-md text-dark"></i>
                            </a>
                            <h4 class="title mb-4 mt-4">Let Chax create wealth for you </h4>
                            <p class="text-muted mx-auto para-desc mb-0">Subscribe below for my signals below.</p>
                        </div>
                    </div><!--end col-->
                </div>
            </div>
        </div><!--end container-->

        <!-- Start Price -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Choose The Pricing Plan</h4>
                        <p class="text-dark-50 mb-0">
                            Stay profitable by gaining access to our trading Signals.
                        </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing pricing-primary best-plan rounded bg-light text-center border-0">
                        <div class="card-body py-5">
                            <li class="list-inline-item mx-2 mt-3"><a href="" target="_blank"
                                class="btn btn-icon btn-pills btn-lg btn-primary" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Signals"><i class="mdi mdi-signal"></i></a></li>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">120</span><br>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <a href="{{route('signal.payment', ['signal' => "1 month", 'amount' => 120])}}" class="btn btn-primary btn-sm mt-4">Buy Now</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing pricing-primary best-plan rounded shadow text-center border-0">
                        
                        <div class="card-body py-5">
                            <li class="list-inline-item mx-2 mt-3"><a href="" target="_blank"
                                class="btn btn-icon btn-pills btn-lg btn-primary" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Signals"><i class="mdi mdi-signal"></i></a></li>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">300</span>
                                <span class="h4 align-self-end mb-1">3/mo</span>
                            </div>

                            
                            <a href="{{route('signal.payment', ['signal' => "3 month", 'amount' => 300])}}" class="btn btn-primary btn-sm mt-4">Buy Now</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing pricing-primary best-plan rounded bg-light text-center border-0">
                        <div class="card-body py-5">
                            <li class="list-inline-item mx-2 mt-3"><a href="" target="_blank"
                                class="btn btn-icon btn-pills btn-lg btn-primary" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Signals"><i class="mdi mdi-signal"></i></a></li>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">550</span>
                                <span class="h4 align-self-end mb-1">6/mo</span>
                            </div>

                            <a href="{{route('signal.payment', ['signal' => "6 month", 'amount' => 550])}}" class="btn btn-primary btn-sm mt-4">Buy Now</a>
                            
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 col-12 mt-4 pt-2">
                    <div class="card pricing pricing-primary best-plan rounded bg-light text-center border-0">
                        <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span
                            class="text-center d-block shadow small h6">Best</span></div>
                        <div class="card-body py-5">
                            <li class="list-inline-item mx-2 mt-3"><a href="" target="_blank"
                                class="btn btn-icon btn-pills btn-lg btn-primary" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Signals"><i class="mdi mdi-signal"></i></a></li>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">$</span>
                                <span class="price h1 mb-0">1000</span>
                                <span class="h4 align-self-end mb-1">/yr</span>
                            </div>

                            <a href="{{route('signal.payment', ['signal' => "1 year", 'amount' => 1000])}}" class="btn btn-primary btn-sm mt-4">Buy Now</a>
                            
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Price -->
    </section><!--end section-->
    <!-- CTA END -->


    <!-- Price Start -->
    <section class="section">
     
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
                            <a href="{{ route('signal') }}" class="btn btn-light">Get Our Signals</a>
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
