@extends('website.layouts.master')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100"
        style="background: url('{{asset('website_asset/images/digital/contact.jpeg')}}') top center">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0" style="color: white">
                            Frequently Asked Questions
                        </h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item" active><a href="#">FAQ</a></li>
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

    <!-- Start Terms & Conditions -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card shadow border-0 rounded">
                        <div class="card-body">
                            <h5 class="card-title">Users Question & Answer :</h5>

                            <div class="accordion mt-4 pt-2" id="buyingquestion">
                                <div class="accordion-item rounded">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0 bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How does it work ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse border-0 collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#buyingquestion">
                                        <div class="accordion-body text-muted">
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in
                                            some form.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Do I need a designer to use Landrick ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse border-0 collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#buyingquestion">
                                        <div class="accordion-body text-muted">
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in
                                            some form.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            What do I need to do to start selling ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse border-0 collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#buyingquestion">
                                        <div class="accordion-body text-muted">
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in
                                            some form.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            What happens when I receive an order ?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse border-0 collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#buyingquestion">
                                        <div class="accordion-body text-muted">
                                            There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in
                                            some form.
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <!-- End Terms & Conditions -->
@endsection
