@extends('website.layouts.master')

@section('content')
    <!-- Hero Start -->
    <section class="bg-light d-table w-100"
        style="background: url('{{ asset('website_asset/images/digital/contact.jpeg') }}') top center">
        <div class="container">
            <!--end row-->
            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item" active><a href="#">checkout</a></li>
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
            <!-- Payment and Price Start -->
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Checkout</h4>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 col-12 mt-4 pt-2">
                        <div class="card rounded border-0 shadow">
                            <div class="bg-light p-4 text-center rounded-top">
                                <h4 class="mb-0 card-title text-primary">Billing details</h4>
                            </div>

                            <div class="card-body">
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
                                <form
                                    action="
                                    @if ($price == 500) {{ route('referral.checkout.process', ['price' => $price, 'id' => $id, 'mentorship' => 'One year mentorship']) }}

                                                @else
                                                {{ route('referral.checkout.process', ['price' => $price, 'id' => $id, 'mentorship' => 'Life time mentorship']) }} @endif
"
                                    method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Surname : </label>
                                                <input name="surname" id="name" type="text"
                                                    class="form-control fw-bold" required placeholder="Name" />
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">First name : </label>
                                                <input name="firstname" id="name" type="text"
                                                    class="form-control fw-bold" required placeholder="Name" />
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone :</label>
                                                <input type="text" name="phone" class="form-control fw-bold" required
                                                    placeholder="+244 000 000" />
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email :</label>
                                                <input type="email" name="email" class="form-control fw-bold" required
                                                    placeholder="username@email.com" />
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Country :</label>
                                                <select class="form-select" name="country" id="">
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password :</label>
                                                <input type="password" name="password" class="form-control fw-bold" required
                                                    placeholder="*******" />
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" required type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">Accept our terms to
                                                    proceed
                                                </label>
                                                <p style="font-size: 13px" class="w-70">
                                                    <b> NO REFUND POLICY.</b>
                                                    By subscribing to our Mentorship program, you hereby
                                                    accept that, all sales are final and you accept our
                                                    No Refund Policy and are subject to The kings Maker
                                                    Terms of Service. If you have any concerns, reach
                                                    our support team: support@thekingmaker.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" id="submit" class="submitBnt btn btn-primary">Proceed
                                                to Payment</button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-5 col-md-6 col-12 mt-4 pt-2">
                        <div class="card bg-light shadow rounded border-0">
                            <div class="bg-primary bg-gradient p-4 text-center rounded-top">
                                <h4 class="mb-0 card-title title-dark text-white">
                                    Order summary
                                </h4>
                            </div>

                            @if ($price == 300)
                                <div class="card-body">
                                    <div class="d-flex justify-content-center mb-4">
                                        <span class="h4 mb-0 mt-2 text-primary">One Year Mentorship</span>
                                        <span class="h6 align-self-end fw-bold text-uppercase mb-2 ms-2">
                                        </span>
                                    </div>

                                    <ul class="feature list-inline">
                                        <li class="h6 mt-2 fw-normal">Mentorship Details</li>

                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>Personal Contact
                                            to Mentor
                                        </li>
                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>My Live Signals
                                            and Trades ideas
                                        </li>
                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>Risk Management
                                        </li>
                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>How to Pass All
                                            Prop Firm
                                        </li>
                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>Psychology
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-primary mt-4 pt-2">Total:</h4>
                                        </div>
                                        <div class="col">
                                            <h4 class="text-primary mt-4 pt-2">${{ number_format($price) }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="card-body">
                                    <div class="d-flex justify-content-center mb-4">
                                        <span class="h4 mb-0 mt-2 text-primary">Life Time Package</span>
                                        <span class="h6 align-self-end fw-bold text-uppercase mb-2 ms-2">
                                        </span>
                                    </div>

                                    <ul class="feature list-inline">
                                        <li class="h6 mt-2 fw-normal">Mentorship Details</li>

                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>Personal Contact
                                            to Mentor
                                        </li>
                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>My Live Signals
                                            and Trades ideas
                                        </li>
                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>Risk Management
                                        </li>
                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>How to Pass All
                                            Prop Firm
                                        </li>
                                        <li class="h6 text-muted mb-0">
                                            <span class="icon h5 me-2"><i
                                                    class="uil uil-check-circle align-middle"></i></span>Psychology
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-primary mt-4 pt-2">Total:</h4>
                                        </div>
                                        <div class="col">
                                            <h4 class="text-primary mt-4 pt-2">${{ number_format($price) }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endif





                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <!-- Payment and Price End -->
            <!--end row-->
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
                            <span class="text-primary fw-bold"></span>Contact us for more
                            information and calrity on any of our packages.
                        </p>
                        <div class="mt-4 pt-2">
                            <a href="contact.html" class="btn btn-primary">Contact us <i
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
