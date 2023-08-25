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
                <!-- end breadcrumb-content -->
                <div class="section-block mb-5"></div>
                <div class="dashboard-heading mb-5">
                    <h3 class="fs-22 font-weight-semi-bold">Referrals</h3>
                </div>
                <div class="table-responsive mb-5">
                    <h3 class="fs-18 font-weight-semi-bold pb-4">My Referrals</h3>
                    <table class="table generic-table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Reward</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($referrals as $row)
                                {{-- @php
                                    $amount = \App\Models\Referral::select('bonus_amount')->where('user_id', auth()->user()->id)->get();
                                @endphp --}}
                                <tr>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $row->user->firstname }} {{ $row->user->surname }}</li>
                                        </ul>
                                    </th>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $row->bonus_amount }} </li>
                                            {{-- <li>{{ \App\Models\Referral::select('bonus_amount')->where('user_id', auth()->user()->id)->get()->value('bonus_amount') }} </li> --}}
                                        </ul>
                                    </th>
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
