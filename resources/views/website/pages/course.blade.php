@extends('website.layouts.master')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-primary d-table w-100"
        style="background-image: url('{{ asset('website_asset/images/digital/contact.jpeg') }}');">
        <div class="container">
            <ul class="list-unstyled mt-4 mb-0 position-middle-bottom">
                <li class="align-items-center justify-content-center list-inline-item mx-2">
                    <i class="uil uil-clock fs-5 text-white title-dark align-middle"></i>
                    <span class="text-white-50 ms-1">4 Weeks</span>
                </li>

                <li class="align-items-center justify-content-center list-inline-item mx-2">
                    <i class="uil uil-signal fs-5 text-white title-dark align-middle"></i>
                    <span class="text-white-50 ms-1">All Levels</span>
                </li>

                <li class="align-items-center justify-content-center list-inline-item mx-2">
                    <i class="uil uil-book-open fs-5 text-white title-dark align-middle"></i>
                    <span class="text-white-50 ms-1">16 Lessons</span>
                </li>

                <li class="align-items-center justify-content-center list-inline-item mx-2">
                    <i class="uil uil-shopping-cart fs-5 text-white title-dark align-middle"></i>
                    <a href="{{route('mentorship')}}" class="text-white">Get Enrolled</a>
                </li>
            </ul>
        </div> <!--end container-->
    </section><!--end section-->
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


   

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="section-title text-center mb-4 pb-2">
                <a href="{{route('mentorship')}}" class="btn btn-primary m-1">Get enrolled <i
                    class="uil uil-angle-right-b align-middle"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mt-4 pt-2">
                        <div class="row">
                            <div class="col-md-6 mt-4 pt-2">
                                <div class="position-relative">
                                    <img src="{{ asset('website_asset/images/course/3.png') }}"
                                        class="rounded img-fluid mx-auto d-block" alt="">
                                    <div class="play-icon">
                                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                            class="play-btn lightbox border-0">
                                            <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6 mt-4 pt-2">
                                <h5 class="mb-0">Beginner</h5>

                                <div class="table-responsive bg-white shadow rounded mt-4">
                                    <table class="table mb-0 table-center">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3"
                                                    style="min-width: 100px;">Lessons</th>
                                                <th scope="col"
                                                    class="fw-normal border-bottom text-muted py-4 px-3 text-end">Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">What is Forex
                                                                <a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><span class="badge bg-soft-primary">Read
                                                        Free</span></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">What is
                                                                pips</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">Who trades the
                                                                market</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">What are candle
                                                                sticks</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-6 mt-4 pt-2">
                                <div class="position-relative">
                                    <img src="{{ asset('website_asset/images/course/1.jpg') }}"
                                        class="rounded img-fluid mx-auto d-block" alt="">
                                    <div class="play-icon">
                                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                            class="play-btn lightbox border-0">
                                            <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6 mt-4 pt-2">
                                <h5 class="mb-0">Intermidiate</h5>

                                <div class="table-responsive bg-white shadow rounded mt-4">
                                    <table class="table mb-0 table-center">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3"
                                                    style="min-width: 100px;">Lessons</th>
                                                <th scope="col"
                                                    class="fw-normal border-bottom text-muted py-4 px-3 text-end">Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">What is
                                                                Technical Analysis</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><span class="badge bg-soft-primary">Read
                                                        Free</span></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">What are
                                                                support and resistance</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">What are
                                                                swing highs and low</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">Understanding
                                                                Meta trader 4</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-6 mt-4 pt-2">
                                <div class="position-relative">
                                    <img src="{{ asset('website_asset/images/course/2.jpg') }}"
                                        class="rounded img-fluid mx-auto d-block" alt="">
                                    <div class="play-icon">
                                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                            class="play-btn lightbox border-0">
                                            <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6 mt-4 pt-2">
                                <h5 class="mb-0">Advance</h5>

                                <div class="table-responsive bg-white shadow rounded mt-4">
                                    <table class="table mb-0 table-center">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3"
                                                    style="min-width: 100px;">Lessons</th>
                                                <th scope="col"
                                                    class="fw-normal border-bottom text-muted py-4 px-3 text-end">Time</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">Understanding
                                                                Liquidity</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><span class="badge bg-soft-primary">Read
                                                        Free</span></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)"
                                                                class="text-muted">Psychology</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">Time zone</a>
                                                        </p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                            <tr>
                                                <th class="p-3">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                href="javascript:void(0)" class="text-muted">Passing Prop
                                                                firms</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-3 text-end"><i class="uil uil-lock"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                    <div class="section-title text-center mb-4 pb-2">
                        <br>
                        <a href="{{route('mentorship')}}" class="btn btn-primary m-1">Get enrolled <i
                            class="uil uil-angle-right-b align-middle"></i></a>
                    </div>

                    <div class="section-title mt-4 pt-2">
                        <h4 class="title mb-0">Instructor</h4>

                        <div class="d-md-flex align-items-center mt-4 pt-2">

                            <div class="ms-md-3 mt-4 mt-sm-0">
                                <a href="javascript:void(0)" class="text-dark h5">Chax The King Maker</a>
                                <p class="text-muted mb-0 mt-2">As your Forex mentor, I believe: this course is the
                                    ultimate guide. Learn vital market insights, proven strategies, and risk management.
                                    Prepare for successful, well-informed trading journeys..</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
