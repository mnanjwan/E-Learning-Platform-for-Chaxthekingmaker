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
                    <h3 class="fs-22 font-weight-semi-bold">All students</h3>
                </div>

                <div class="table-responsive mb-5">
                    <h3 class="fs-18 font-weight-semi-bold pb-4">Student Details</h3>
                    <table class="table generic-table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Date Joined</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user as $user)
                                <tr>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $user->firstname }} {{ $user->surname }}</li>
                                        </ul>
                                    </th>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $user->email }}</li>
                                        </ul>
                                    </th>
                                    <th scope="row">
                                        <ul class="generic-list-item">
                                            <li>{{ $user->phone }}</li>
                                        </ul>
                                    </th>
                                   

                                    @foreach ($user->orders as $order)
                                    <td>
                                        <ul class="generic-list-item">
                                            <li>{{ $order->product_name }}</li>
                                        </ul>
                                    </td>
                                    @endforeach
                                   
                                    <td>
                                        <ul class="generic-list-item">
                                            <li> {{"July 12, 2019"}} </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="generic-list-item">
                                            <li><span
                                                    class="badge {{ $user->status === 'active' ? 'bg-success' : 'bg-danger' }}  text-white p-1">{{ $user->status === 'active' ? 'Active' : 'Disabled' }}</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="nav-right-button d-flex align-items-center">
                                            <div class="generic-action-wrap generic--action-wrap">
                                                <div class="dropdown">
                                                    <a class="action-btn" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="la la-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">View</a>
                                                        <a class="dropdown-item" href="#">Activate</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end nav-right-button -->
                                    </td>
                                </tr>
                            @empty
                                No User Found
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
