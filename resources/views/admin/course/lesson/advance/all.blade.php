@extends('user.layouts.master')
@section('content')
    <!-- ================================
                        START DASHBOARD AREA
                    ================================= -->
    <section class="dashboard-area">
        @include('admin.includes.asidebar')
        <!-- end off-canvas-menu -->
        <div class="dashboard-content-wrap">
            <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
                <i class="la la-bars mr-1"></i> Dashboard Nav
            </div>
            <div class="container-fluid">
                @include('admin.includes.header')
                <!-- end breadcrumb-content -->
                <div class="section-block mb-5"></div>
                <div class="dashboard-heading mb-5">
                    <h3 class="fs-22 font-weight-semi-bold">Referrals</h3>
                </div>
                <div class="table-responsive mb-5">
                    <h3 class="fs-18 font-weight-semi-bold pb-4">All Referrals</h3>
                    <table class="table generic-table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Video</th>
                                <th scope="col">Sequence</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($lessons as $row)
                                <tr>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $row->title }} </li>
                                        </ul>
                                    </th>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $row->description }}</li>
                                        </ul>
                                    </th>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $row->video_url }} </li>
                                        </ul>
                                    </th>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $row->sequence }} </li>
                                        </ul>
                                    </th>
                                    {{-- <th scope="row">
                                        <ul class="generic-list-item">
                                            @php
                                                $referrer_firstname = App\Models\User::where('id', $row->user_id)->get()->value('firstname');
                                                $referrer_surname = App\Models\User::where('id', $row->user_id)->get()->value('surname');
                                            @endphp
                                            <li>{{ $referrer_firstname }} {{ $referrer_surname }} </li>
                                        </ul>
                                    </th> --}}
                                </tr>
                            @empty
                                <p class="fs-18 font-weight-semi-bold pb-4" style="color: red">No Referrals yet</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
                        END DASHBOARD AREA
                    ================================= -->
@endsection
