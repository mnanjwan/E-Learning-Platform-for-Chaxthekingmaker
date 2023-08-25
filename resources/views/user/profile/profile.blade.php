@extends('user.layouts.master')
@section('content')


    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-area">
      @include('user.includes.asidebar');
        <!-- end off-canvas-menu -->
        <div class="dashboard-content-wrap">
            <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
                <i class="la la-bars mr-1"></i> Dashboard Nav
            </div>
            <div class="container-fluid">
              @include('user.includes.header')
                <!-- end breadcrumb-content -->
                <div class="section-block mb-5"></div>
                <div class="row">
                    <div class="col-6">
                        <div class="dashboard-heading mb-5">
                            <h3 class="fs-22 font-weight-semi-bold">My Profile</h3>
                        </div>
                        <div class="profile-detail mb-5">
                            <ul class="generic-list-item generic-list-item-flash">
                                <li>
                                    <span class="profile-name">Registration Date:</span><span class="profile-desc">{{auth()->user()->created_at}}</span>
                                </li>
                                <li>
                                    <span class="profile-name">First Name:</span><span class="profile-desc">{{auth()->user()->firstname}}</span>
                                </li>
                                <li>
                                    <span class="profile-name">Last Name:</span><span class="profile-desc">{{auth()->user()->surname}}</span>
                                </li>
                                <li>
                                    <span class="profile-name">Email:</span><span
                                        class="profile-desc">{{auth()->user()->email}}</span>
                                </li>
                                <li>
                                    <span class="profile-name">Phone Number:</span><span class="profile-desc">{{auth()->user()->phone}}250</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dashboard-heading mb-5">
                            <h3 class="fs-22 font-weight-semi-bold">My Referral Earnings </h3>
                        </div>
                        <div class="profile-detail mb-5">
                            <ul class="generic-list-item generic-list-item-flash">
                               
                                <li>
                                    <span class="profile-name">Balance:</span><span class="profile-desc">${{number_format(auth()->user()->wallet)}}</span>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="modal-content">
                            <div class="modal-header border-bottom-gray">
                                <h5 class="modal-title fs-19 font-weight-semi-bold" id="shareModalTitle">Referral link</h5>
                                
                            </div><!-- end modal-header -->
                            <div class="modal-body">
                                <div class="copy-to-clipboard">
                                    <span class="success-message">Copied!</span>
                                    <div class="input-group">
                                        <input type="text"  class="form-control form--control copy-input pl-3"
                                            value="{{route('register', ['id' => auth()->user()->id])}}">
                                        <div class="input-group-append">
                                            <button class="btn theme-btn theme-btn-sm copy-btn shadow-none"><i
                                                    class="la la-copy mr-1"></i> Copy</button>
                                        </div>
                                    </div>
                                </div><!-- end copy-to-clipboard -->
                            </div><!-- end modal-body -->
                            <div class="modal-footer justify-content-center border-top-gray">
                                <ul class="social-icons social-icons-styled">
                                    {{-- <li><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                                    <li><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                                    <li><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li> --}}
                                </ul>
                            </div><!-- end modal-footer -->
                        </div><!-- end modal-content-->


                    </div>
                </div>
                

                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end dashboard-content-wrap -->
    </section>
    <!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->
@endsection