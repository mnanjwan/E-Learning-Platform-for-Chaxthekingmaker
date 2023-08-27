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

                <div class="row align-items-left">
                    <div class="col-lg-7 col-md-6 col-12 mt-4 pt-2">
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
                        <div class="card rounded border-0 shadow">
                            <div class="bg-light p-4 text-center rounded-top">
                                <h4 class="mb-0 card-title text-primary">Billing details</h4>
                            </div>

                            <div class="card-body">
                                <ul class="feature list-inline">
                                    <li class="h6 text-muted mb-0">
                                        <span class="icon h5 me-2"></span>Order number: {{ $order->order_id }}
                                    </li>
                                    <li class="h6 text-muted mb-0">
                                        <span class="icon h5 me-2"></span>Date: {{ $order->created_at->format('D, M, Y') }}
                                    </li>
                                    <li class="h6 text-muted mb-0">
                                        <span class="icon h5 me-2"></span>Email: {{ $order->user->email }}
                                    </li>
                                    <li class="h6 text-muted mb-0">
                                        <span class="icon h5 me-2"></span>Total: ${{ number_format($order->amount) }}
                                    </li>
                                    <li class="h6 text-muted mb-0">
                                        <span class="icon h5 me-2"></span>Payment method: {{ 'Bank Transfer' }}
                                    </li>


                                </ul>
                                <p class="h6 text-muted mb-0">
                                    <span class="icon h5 "></span>After the transfer send the email you used to <br> signup
                                    and your proof of payment to any social <li class="list-inline-item mx-2 mt-3"><a
                                            href="https://wa.link/p5vyor" target="_blank"
                                            class="btn btn-icon btn-pills btn-lg btn-success" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Whatsapp"><i class="mdi mdi-whatsapp"></i></a>
                                    </li>
                                    <li class="list-inline-item mx-2 mt-3"><a href="https://t.me/CHAXKM" target="_blank"
                                            class="btn btn-icon btn-pills btn-lg btn-info" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Telegram"><i class="uil uil-telegram"></i></a>
                                    </li>
                                </p>
                                <!--end form-->
                                <hr>
                                <h1 class="mb-0 card-title title-dark text-dark">
                                    Our Bank Details
                                    <br>
                                    Chax The King Maker:
                                </h1>
                                <p class="h3 mb-0">
                                    <span class="icon h5 "></span>GTB Bank
                                </p>
                                <p class="h3 mb-0">
                                    <span class="icon h5 "></span>Acct. No: 000987654
                                </p>
                                <hr>    

                                <div class="subcribe-form">
                                    <h1 class="mb-0 card-title title-dark text-warning">
                                        Our Crypto Details
                                        <br>
                                        USDT (TRC20):
                                    </h1>
                                    <p class="h6 text-primary mb-0" style="">
                                        <span class="icon h5 ">NOTE: </span>Please, confirm wallet address before making payments</p>
                                    <form>
                                        <input id="copyText" value="TGXVdVhNwGEC2VSPrF2XqJzHQ2H8MwHFHV" readonly class="form-control rounded-pill shadow" >
                                        <button onclick="copyToClipboard()" class="btn btn-pills btn-primary">Copy Text</button>
                                    </form><!--end form-->
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-5 col-md-6 col-12 mt-4 pt-2">
                        <div class="card bg-light shadow rounded border-0">
                            <div class="bg-primary bg-gradient p-4 text-center rounded-top">
                                <h4 class="mb-0 card-title title-dark text-white">
                                    Order details
                                </h4>
                            </div>

                            @if ($order->amount == 300)
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
                                            <h4 class="text-primary mt-4 pt-2">${{ number_format($order->amount) }}
                                            </h4>
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
                                            <h4 class="text-primary mt-4 pt-2">${{ number_format($order->amount) }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- <div class="card-body">
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
                                        <h4 class="text-primary mt-4 pt-2">${{number_format($order->total_amount)}}</h4>
                                    </div>
                                </div>
                            </div> --}}

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
                            <span class="text-primary fw-bold"></span> For more
                            information and calrity on any of our packages.
                        </p>
                        <div class="mt-4 pt-2">
                            <a href="{{route('contact')}}" class="btn btn-primary">Contact us <i
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
    <div class="modal fade" id="empty-cart" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content rounded shadow border-0">
                                                <div class="modal-body py-5">
                                                    <div class="text-center">
                                                        <div class="mt-4">
                                                            <h4>Your cart is empty.</h4>
                                                            <p class="text-muted">Looks like you haven't made your choice yet...</p>
                                                            <div class="mt-4">
                                                                <a href="javascript:void(0)" class="btn btn-primary">Start Shopping</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

    <script>
        function copyToClipboard() {
            var copyText = document.getElementById("copyText");
            copyText.select();
            document.execCommand("copy");

            alert("Text copied to clipboard: " + copyText.value);
        }
    </script>
@endsection
