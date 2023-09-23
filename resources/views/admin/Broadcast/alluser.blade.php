@extends('user.layouts.master')
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
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
                    <h3 class="fs-22 font-weight-semi-bold">Broadcast email</h3>
                </div>
                <form action="{{ route('admin.broadcast.email.post') }}" method="post">
                    @csrf
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-22 font-weight-semi-bold pb-2">Type mail</h3>
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label-text">Subject or Title</label>
                                        @error('title')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                        <input class="form-control form--control pl-3" type="text" name="subject"
                                            placeholder="e.g. Mail Subject" value="{{ old('subject') }}">
                                    </div>
                                </div><!-- end col-lg-12 -->
                              
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label-text">Body</label>
                                        <textarea class="form-control form--control user-text-editor pl-3"name="body" id="editor"></textarea>
                                    </div>
                                </div><!-- end col-lg-12 -->
                        
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                   
                    <div class="course-submit-btn-box pb-4">
                        <button class="btn theme-btn" type="submit">Send email broadcast</button>
                    </div>
                </form>

            </div><!-- end container-fluid -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
                    END DASHBOARD AREA
                ================================= -->
                
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
