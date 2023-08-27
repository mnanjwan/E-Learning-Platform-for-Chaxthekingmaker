@extends('user.layouts.master')

@section('content')

    <!-- ================================
        START DASHBOARD AREA
    ================================= -->
    <section class="dashboard-area">
        @include('user.includes.asidebar')
        <!-- end off-canvas-menu -->
        <div class="dashboard-content-wrap">
            <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
                <i class="la la-bars mr-1"></i> Dashboard Nav
            </div>
            <div class="container-fluid">
                @include('user.includes.header')

                <div class="section-block mb-5"></div>
                <div class="dashboard-heading mb-5">
                    <h3 class="fs-22 font-weight-semi-bold">Enrolled Courses</h3>
                </div>
                <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="all-course-tab" data-toggle="tab" href="#all-course" role="tab"
                            aria-controls="all-course" aria-selected="false">
                            All Courses
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="active-course-tab" data-toggle="tab" href="#active-course" role="tab"
                            aria-controls="active-course" aria-selected="true">
                            Active Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="completed-course-tab" data-toggle="tab" href="#completed-course"
                            role="tab" aria-controls="completed-course" aria-selected="false">
                            Completed Courses
                        </a>
                    </li> --}}
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-course" role="tabpanel" aria-labelledby="all-course-tab">
                        <div class="row">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item">
                                    <div class="card-image">
                                        <a href="#" class="d-block">
                                            <img class="card-img-top" src="{{asset('website_asset/images/course/10.jpg')}}" alt="Card image cap">
                                            <div class="play-button">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                                    y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                    <style type="text/css">
                                                        .st0 {
                                                            opacity: 0.6;
                                                            fill: #000000;
                                                            border-radius: 100px;
                                                        }

                                                        .st1 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <g>
                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9">
                                                        </circle>
                                                        <path class="st1"
                                                            d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div><!-- end card-image -->
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="{{route('advance.lesson', ['id' => 30])}}">Beginners</a></h5>
                                        <p class="card-text lh-22 pt-2"><a href="{{route('advance.lesson', ['id' => 30])}}"></a><span>Explore
                                                Forex basics, learn currency trading essentials, and gain market insights in
                                                our beginner-friendly class. Start your trading journey today!</span></p>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item">
                                    <div class="card-image">
                                        <a href="#" class="d-block">
                                            <img class="card-img-top" src="{{asset('website_asset/images/course/20.jpg')}}" alt="Card image cap">
                                            <div class="play-button">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                                    y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                    <style type="text/css">
                                                        .st0 {
                                                            opacity: 0.6;
                                                            fill: #000000;
                                                            border-radius: 100px;
                                                        }

                                                        .st1 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <g>
                                                        <circle class="st0" cx="-261.5" cy="384.7" r="45.9">
                                                        </circle>
                                                        <path class="st1"
                                                            d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div><!-- end card-image -->
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="{{route('advance.lesson', ['id' => 30])}}">Intermediate</a></h5>
                                        <p class="card-text lh-22 pt-2"><a href="{{route('advance.lesson', ['id' => 30])}}"></a><span>Enhance
                                                Forex skills, analyze charts, implement strategies, and deepen market
                                                understanding in our interactive intermediate class. Elevate your trading
                                                expertise now</span></p>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item">
                                    <div class="card-image">
                                        <a href="#" class="d-block">
                                            <img class="card-img-top" src="{{asset('website_asset/images/course/30.jpg')}}" alt="Card image cap">
                                            <div class="play-button">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                                    y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                    <style type="text/css">
                                                        .st0 {
                                                            opacity: 0.6;
                                                            fill: #000000;
                                                            border-radius: 100px;
                                                        }

                                                        .st1 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <g>
                                                        <circle class="st0" cx="-261.5" cy="384.7"
                                                            r="45.9"></circle>
                                                        <path class="st1"
                                                            d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div><!-- end card-image -->
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="{{route('advance.lesson', ['id' => 30])}}">Advanced</a></h5>
                                        <p class="card-text lh-22 pt-2"><a href="{{route('advance.lesson', ['id' => 30])}}"></a><span> Master advanced Forex techniques, refine trading
                                                strategies, and navigate complex markets with expert guidance in our dynamic
                                                advanced class</span></p>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col-lg-4 -->
                        </div><!-- end row -->
                    </div><!-- end tab-pane -->
                  
                </div><!-- end tab-content -->


            </div><!-- end container-fluid -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
        END DASHBOARD AREA
    ================================= -->
@endsection