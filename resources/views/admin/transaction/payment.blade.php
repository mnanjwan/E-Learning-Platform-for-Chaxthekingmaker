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
                    <h3 class="fs-22 font-weight-semi-bold">All Payments</h3>
                </div>

                <div class="table-responsive mb-5">
                    <h3 class="fs-18 font-weight-semi-bold pb-4">Payments Details</h3>
                    <table class="table generic-table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Type</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($approve as $row)
                                <tr>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $row->order_id }}</li>
                                        </ul>
                                    </th>
                                    {{-- @foreach ($row->order as $order) --}}
                                    <td>
                                        <ul class="generic-list-item">
                                            <li>{{ $row->order->product_name }}</li>
                                        </ul>
                                    </td>
                                    {{-- @endforeach --}}
                                    <td>
                                        <ul class="generic-list-item">
                                            <li>${{ $row->amount }}</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="generic-list-item">
                                            <li>{{ $row->status }}</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="generic-list-item">
                                            <li>{{ $row->created_at->format('F j, Y') }}</li>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="generic-list-item">
                                            <li>{{ $row->type }}</li>
                                        </ul>
                                    </td>
                                </tr>
                            @empty
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
