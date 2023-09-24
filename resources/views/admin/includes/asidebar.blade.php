<div class="off-canvas-menu dashboard-off-canvas-menu off--canvas-menu custom-scrollbar-styled pt-20px">
    <div class="off-canvas-menu-close dashboard-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip"
        data-placement="left" title="Close menu">
        <i class="la la-times"></i>
    </div>
    <!-- end off-canvas-menu-close -->
    <div class="logo-box px-4">
        <a href="{{ route('admin.dashboard') }}" class="logo"><img src="{{ asset('user_asset/images/logo.png') }}"
                width="100%" alt="logo" /></a>
    </div>
    <ul class="generic-list-item off-canvas-menu-list off--canvas-menu-list pt-35px">
        <li class="page-active">
            <a href="{{ route('admin.dashboard') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                    height="18px" viewBox="0 0 24 24" width="18px">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                </svg>
                Dashboard</a>
        </li>
        <hr>
        <ul class="m-2">
            <a href="dashboard-purchase-history.html">
                Manage Courses</a>
            <li>
                <a href="{{route('admin.course')}}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                    </svg>
                    My Courses</a>
            </li>
            <li>
                <a href="{{route('admin.course.add')}}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                    </svg>
                    Add Lesson</a>
            </li>

        </ul>
        <hr>
        <ul class="m-2">
            <a href="">
                Manage Students</a>
            <li>
                <a href="{{ route('admin.user') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                    </svg>
                    All Student</a>
            </li>
            <li>
                <a href="{{ route('admin.user.pending') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                    </svg>
                    Pending Student</a>
            </li>
            <li>
                <a href="{{ route('admin.suspend') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" /> 
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                    </svg>
                    Suspended Student</a>
            </li>
            <hr>
            {{-- <li>
                <a href="{{ route('admin.broadcast.email') }}"   style="background-color: rgb(45, 57, 78); color:white"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"  style="background-color: rgb(255, 255, 255); color:white"
                        height="18px" viewBox="0 0 24 24" width="18px">
                    </svg>
                    Email Broadcast</a>
            </li> --}}
        </ul>
        


        <hr>
        <ul class="m-2">
            <a href="#">
                Manage Transactions</a>
            <li>
                <a href="{{ route('admin.user.transaction') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                    </svg>
                    Payment History</a>
            </li>
            <li>
                <a href="{{ route('admin.earnings') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z" />
                    </svg>
                    Mentors Earnings</a>
            </li>
            <li>
                <a href="{{ route('admin.user.withdrawal') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z" />
                        <circle cx="16" cy="12" r="1.5" />
                    </svg>
                    Student Withdrawals</a>
            </li>

        </ul>
        <hr>

        <ul class="m-2">
            <a href="#">
                Manage Referrals</a>
            <li>
                <a href="{{ route('admin.user.referral') }}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg"
                        height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                    </svg>
                    All Referrals Earnings</a>
            </li>
        </ul>
        <hr>
        <li>
            <a href="{{route('admin-logout')}}"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px"
                    viewBox="0 0 24 24" width="18px">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z" />
                </svg>
                Logout</a>
        </li>
        <!-- <li>
    <a
      href="javascript:void(0)"
      data-toggle="modal"
      data-target="#deleteModal"
      ><svg
        class="mr-2"
        xmlns="http://www.w3.org/2000/svg"
        height="18px"
        viewBox="0 0 24 24"
        width="18px"
      >
        <path d="M0 0h24v24H0V0z" fill="none" />
        <path
          d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"
        />
      </svg>
      Suspend Account</a
    >
  </li> -->
    </ul>
</div>
