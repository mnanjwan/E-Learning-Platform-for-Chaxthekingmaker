@extends('user.layouts.master')
<!-- end cssload-loader -->


<!-- ================================
    START DASHBOARD AREA
================================= -->
@section('content')
    <section class="dashboard-area">
        @include('user.includes.asidebar')
        <div class="dashboard-content-wrap">
            <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
                <i class="la la-bars mr-1"></i> Dashboard Nav
            </div>
            <div class="container-fluid">
                @include('user.includes.header')

                <div class="section-block mb-5"></div>
                <div class="dashboard-heading mb-5">
                    <h3 class="fs-22 font-weight-semi-bold">Settings</h3>
                </div>
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
                <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile"
                            role="tab" aria-controls="edit-profile" aria-selected="false">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab"
                            aria-controls="password" aria-selected="true">
                            Password
                        </a>
                    </li>


                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="edit-profile" role="tabpanel"
                        aria-labelledby="edit-profile-tab">
                        <div class="setting-body">
                            <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>
                            <div class="media media-card align-items-center">
                                <div class="media-img media-img-lg mr-4 bg-gray">
                                    <img class="mr-3" src="{{ asset('user_asset/images/avatar.jpg') ?? '' }}"
                                        alt="avatar image">
                                </div>
                                <div class="media-body">
                                    <div class="file-upload-wrap file-upload-wrap-2">
                                        <input type="file" name="files[]" disabled
                                            class="multi file-upload-input with-preview" multiple>
                                        <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a Photo</span>
                                    </div><!-- file-upload-wrap -->
                                    <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable files
                                        are .jpg & .png</p>
                                </div>
                            </div><!-- end media -->
                            <form method="post" class="row pt-40px">
                                <div class="input-box col-lg-3">
                                    <label class="label-text">First Name</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="text"
                                            @disabled(true) value="">
                                        <span class="la la-user input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-3">
                                    <label class="label-text">Last Name</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="text"
                                            @disabled(true) value="">
                                        <span class="la la-user input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->

                                <div class="input-box col-lg-3">
                                    <label class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="email" name="email"
                                            @disabled(true) value="">
                                        <span class="la la-envelope input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-12">
                                    <label class="label-text"></label>
                                    <div class="form-group" style="height: 20%">

                                    </div>
                                </div><!-- end input-box -->
                            </form>
                        </div><!-- end setting-body -->
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <div class="setting-body">
                            <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>
                            <form action="{{ route('change.password') }}" method="post" class="row">
                                @csrf
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="input-box col-lg-4">
                                    <label class="label-text">Current Password</label>
                                    <div class="form-group">
                                        @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <input
                                            class="form-control form--control  @error('current_password') is-invalid @enderror"
                                            type="password" name="current_password" placeholder="Old Password">
                                        <span class="la la-lock input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-4">
                                    <label class="label-text">New Password</label>
                                    <div class="form-group">
                                        <input class="form-control form--control @error('password') is-invalid @enderror"
                                            type="password" name="password" placeholder="New Password">
                                        <span class="la la-lock input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-4">
                                    <label class="label-text">Confirm New Password</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="password"
                                            name="password_confirmation" placeholder="Confirm New Password">
                                        <span class="la la-lock input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-12 py-2">
                                    <button class="btn theme-btn">Change Password</button>
                                </div><!-- end input-box -->
                            </form>

                        </div><!-- end setting-body -->
                    </div><!-- end tab-pane -->
                </div><!-- end tab-content -->

            </div><!-- end container-fluid -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
                        END DASHBOARD AREA
                    ================================= -->
@endsection
