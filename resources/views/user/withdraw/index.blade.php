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
                            <h3 class="fs-22 font-weight-semi-bold">My Referral Earnings </h3>
                        </div>
                        <div class="profile-detail mb-5">
                            <ul class="generic-list-item generic-list-item-flash">

                                <li>
                                    <span class="profile-name">Balance:</span><span class="profile-desc"
                                        style="font-size: 200%; color:black">${{ number_format(auth()->user()->wallet) }}</span>
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
                                        <input type="text" class="form-control form--control copy-input pl-3"
                                            value="{{ route('register', ['id' => auth()->user()->id]) }}">
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
                    <div class="col-6" style="float: right">
                        <div class="dashboard-heading mb-5">
                            <h3 class="fs-22 font-weight-semi-bold">Place a withdrawal</h3>
                        </div>
                        @error('amount')
                            <div class="alert alert-danger" role="alert">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                        <form action="{{ route('user.withdraw.process') }}" method="post" class="row pt-40px">
                            @csrf

                            <div class="input-box col-lg-6">
                                <label class="label-text">Amount</label>
                                <div class="form-group">
                                    <input class="form-control form--control" type="text" name="amount"
                                        placeholder="e.g 100">
                                    <span class="la la-wallet input-icon"></span>
                                </div>
                            </div><!-- end input-box -->


                            <div class="input-box col-lg-12 py-2">
                                <button class="btn theme-btn">Withdraw</button>
                            </div><!-- end input-box -->
                        </form>

                    </div>
                </div>
                <!-- end row -->

                <div class="row" style="padding-top: 5%">
                    <div class="table-responsive mb-5">
                        <h3 class="fs-18 font-weight-semi-bold pb-4">Transaction details Details</h3>
                        <table class="table generic-table">
                            <thead>
                                <tr>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($details as $row)
                                    {{-- @foreach ($row->order as $order) --}}
                                   
                                    {{-- @endforeach --}}
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
                                @empty
                                    
                                @endforelse
                                
    
                            </tbody>
                        </table>
                    </div>
                </div>
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
