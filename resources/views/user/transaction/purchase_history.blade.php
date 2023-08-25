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
                    <h3 class="fs-22 font-weight-semi-bold">Purchase History</h3>
                </div>

                <div class="table-responsive mb-5">
                    <h3 class="fs-18 font-weight-semi-bold pb-4">Order Details</h3>
                    <table class="table generic-table">
                        <thead>
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $row)
                            <tr>
                                <th scope="row">
                                    <ul class="generic-list-item">
                                        <li>{{$row->product_name}}</li>
                                    </ul>
                                </th>
                                <td>
                                    <ul class="generic-list-item">
                                        <li>${{$row->amount}}</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="generic-list-item">
                                        <li>{{$row->created_at->format('F j, Y')}}</li>
                                    </ul>
                                </td>
                               
                                <td>
                                    <ul class="generic-list-item">
                                        <li>{{$row->status}}</li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                            
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