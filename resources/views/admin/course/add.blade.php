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
                @include('admin.includes.header')
                <div class="section-block mb-5"></div>
                <div class="dashboard-heading mb-5">
                    <h3 class="fs-22 font-weight-semi-bold">Submit Lesson</h3>
                </div>
                <form action="{{ route('admin.course.add.post') }}" method="post">
                    @csrf
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-22 font-weight-semi-bold pb-2">Add lesson</h3>
                            <div class="divider"><span></span></div>
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

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-text">Lesson Title</label>
                                        @error('title')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                        <input class="form-control form--control pl-3" type="text" name="title"
                                            placeholder="e.g. Introduction to Forex trading" value="{{ old('title') }}">
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="input-box col-lg-6">
                                    <label class="label-text">Course</label>
                                    <div class="form-group">
                                        <div class="select-container w-auto">
                                            <select name="course_id" class="form-control select-container-select">
                                                <option>Select Course</option>
                                                <option value="1">Beginner</option>
                                                <option value="2">Intermediate</option>
                                                <option value="3">Advance</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-text">Lesson Description</label>
                                        <textarea class="form-control form--control user-text-editor pl-3" name="description"></textarea>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-text">lesson Duration</label>
                                        @error('duration')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                        <input class="form-control form--control pl-3" type="text" name="duration"
                                            placeholder="e.g. 30mins or 1hr etc">
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="label-text">lesson URL</label>
                                        @error('video_url')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                        <input class="form-control form--control pl-3" type="text" name="video_url"
                                            placeholder="e.g. http://course.com/vid">
                                    </div>
                                </div><!-- end col-lg-12 -->

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="label-text">lesson Sequence</label>
                                        @error('sequence')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                        <input class="form-control form--control pl-3" type="number" name="sequence"
                                            placeholder="e.g. 1">
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    {{-- <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-22 font-weight-semi-bold pb-2">Video</h3>
                            <div class="divider"><span></span></div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="label-text">Video Title</label>
                                        <input class="form-control form--control pl-3" type="text" name="text"
                                            placeholder="Video title">
                                    </div>
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="label-text">Video Category</label>
                                        <input class="form-control form--control pl-3" type="text" name="text"
                                            placeholder="Video category">
                                    </div>
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="label-text">Video URL</label>
                                        <input class="form-control form--control pl-3" type="text" name="text"
                                            placeholder="Video URL">
                                    </div>
                                </div><!-- end col-lg-4 -->
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card --> --}}
                    <div class="course-submit-btn-box pb-4">
                        <button class="btn theme-btn" type="submit">Upload Course</button>
                    </div>
                </form>

            </div><!-- end container-fluid -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
                    END DASHBOARD AREA
                ================================= -->
@endsection
