@extends('user.layouts.master')
@section('content')
    <!-- ================================
        START DASHBOARD AREA
    ================================= -->
    <section class="dashboard-area">
        @include('admin.includes.asidebar')
        <div class="dashboard-content-wrap">
            <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
                <i class="la la-bars mr-1"></i> Dashboard Nav
            </div>
            <div class="container-fluid">

                <div class="section-block mb-5"></div>
                <div class="dashboard-heading mb-5">
                    <h3 class="fs-22 font-weight-semi-bold">My Courses</h3>
                </div>
                <div class="dashboard-cards mb-5">
                    @foreach ($course as $row)
                    <div class="card card-item card-item-list-layout">
                        <div class="card-image">
                            <a href="#" class="d-block">
                                <img class="card-img-top" src="{{$row->image_cover}}" alt="Card image cap">
                            </a>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{$row->title}}</h6>
                            <h5 class="card-title"><a href="#">{{$row->description}}</a></h5>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    @endforeach
                </div><!-- end col-lg-12 -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
        END DASHBOARD AREA
    ================================= -->

    <!-- start scroll top -->
    <div id="scroll-top">
        <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->
@endsection
