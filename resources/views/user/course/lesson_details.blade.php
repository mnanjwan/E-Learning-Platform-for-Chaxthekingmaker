<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lesson - {{$row->title}}</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">


    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('user_asset/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/line-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('user_asset/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('user_asset/css/jquery-te-1.4.0.css') }}">
    <!-- end inject -->
</head>

<body>

    <!-- start cssload-loader -->
    <div class="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5">
                </circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!--======================================
        START HEADER AREA
    ======================================-->
    <section class="header-menu-area">
        <div class="header-menu-content bg-dark">
            <div class="container-fluid">
                <div class="main-menu-content d-flex align-items-center">
                    <div class="logo-box logo--box">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                    </div><!-- end logo-box -->
                    <div class="course-dashboard-header-title pl-4">
                        <a href="course-details.html" class="text-white fs-15">Introduction to Forex</a>
                    </div><!-- end course-dashboard-header-title -->
                    <div class="menu-wrapper ml-auto">
                        <div class="theme-picker d-flex align-items-center mr-3">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="nav-right-button d-flex align-items-center">

                            <a href="{{ route('dashboard') }}"
                                class="btn theme-btn theme-btn-sm theme-btn-transparent lh-26 text-white mr-2"><i
                                    class="la la-share mr-1"></i>
                                Back to Dashbaord</a>

                        </div><!-- end nav-right-button -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-content -->
    </section><!-- end header-menu-area -->
    <!--======================================
        END HEADER AREA
======================================-->


    <!--======================================
        START HEADER AREA
    ======================================-->
    <!-- end header-menu-area -->
    <!--======================================
            END HEADER AREA
    ======================================-->

    <!--======================================
        START COURSE-DASHBOARD
======================================-->
    <section class="course-dashboard">
        <div class="course-dashboard-wrap">
            <div class="course-dashboard-container d-flex">
                <div class="course-dashboard-column">
                    <div class="lecture-viewer-container">
                        <div class="lecture-video-item">
                            <video controls crossorigin playsinline id="player">
                                <!-- Video files -->
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                    type="video/mp4" />
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4"
                                    type="video/mp4" />
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
                                    type="video/mp4" />

                                <!-- Caption files -->
                                <track kind="captions" label="English" srclang="en"
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                                    default />
                                <track kind="captions" label="Français" srclang="fr"
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt" />

                                <!-- Fallback for browsers that don't support the <video> element -->
                                <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                    download>Download</a>
                            </video>
                        </div>
                    </div><!-- end lecture-viewer-container -->
                    <div class="lecture-video-detail">
                        <div class="lecture-tab-body bg-gray p-4">
                            <ul class="nav nav-tabs generic-tab" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="search-tab" data-toggle="tab" href="#search"
                                        role="tab" aria-controls="search" aria-selected="false">
                                        <i class="la la-search"></i>
                                    </a>
                                </li>
                                <li class="nav-item mobile-menu-nav-item">
                                    <a class="nav-link" id="course-content-tab" data-toggle="tab"
                                        href="#course-content" role="tab" aria-controls="course-content"
                                        aria-selected="false">
                                        Course Content
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                        role="tab" aria-controls="overview" aria-selected="true">
                                        Overview
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="lecture-video-detail-body">
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade" id="course-content" role="tabpanel"
                                    aria-labelledby="course-content-tab">
                                    <div class="mobile-course-menu pt-4">
                                        <div class="accordion generic-accordion generic--accordion"
                                            id="mobileCourseAccordionCourseExample">
                                            <div class="card">
                                                <div class="card-header" id="mobileCourseHeadingOne">
                                                    <button class="btn btn-link" type="button"
                                                        data-toggle="collapse" data-target="#mobileCourseCollapseOne"
                                                        aria-expanded="true" aria-controls="mobileCourseCollapseOne">
                                                        <i class="la la-angle-down"></i>
                                                        <i class="la la-angle-up"></i>
                                                        <span class="fs-15"> Section 1: Dive in and Discover After
                                                            Effects</span>
                                                        <span class="course-duration">
                                                            <span>1/5</span>
                                                            <span>21min</span>
                                                        </span>
                                                    </button>
                                                </div><!-- end card-header -->
                                                <div id="mobileCourseCollapseOne" class="collapse show"
                                                    aria-labelledby="mobileCourseHeadingOne"
                                                    data-parent="#mobileCourseAccordionCourseExample">
                                                    <div class="card-body p-0">
                                                        <ul class="curriculum-sidebar-list">
                                                            <li class="course-item-link active">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="mobileCourseCheckbox" required>
                                                                        <label
                                                                            class="custom-control-label custom--control-label"
                                                                            for="mobileCourseCheckbox"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">1. Let's Have Fun -
                                                                            Seriously!</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i
                                                                                    class="la la-play-circle"></i>2min
                                                                            </p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="mobileCourseCheckbox2" required>
                                                                        <label
                                                                            class="custom-control-label custom--control-label"
                                                                            for="mobileCourseCheckbox2"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">2. A simple concept to get
                                                                            ahead</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i
                                                                                    class="la la-play-circle"></i>2min
                                                                            </p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link active-resource">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="mobileCourseCheckbox3" required>
                                                                        <label
                                                                            class="custom-control-label custom--control-label"
                                                                            for="mobileCourseCheckbox3"></label>
                                                                    </div><!-- end custom-control -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                        </ul>
                                                    </div><!-- end card-body -->
                                                </div><!-- end collapse -->
                                            </div><!-- end card -->

                                        </div><!-- end accordion-->
                                    </div><!-- end mobile-course-menu -->
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab">
                                    <div class="lecture-overview-wrap">
                                        <div class="lecture-overview-item">
                                            <h3 class="fs-24 font-weight-semi-bold pb-2">About this course</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta
                                                eos iste maxime sapiente similique totam? Consequatur consequuntur
                                                excepturi in, magni necessitatibus nemo quae repellendus</p>
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="fs-16 font-weight-semi-bold pb-2">Description</h3>
                                                </div><!-- end lecture-overview-stats-item -->
                                                <div
                                                    class="lecture-overview-stats-item lecture-overview-stats-wide-item lecture-description">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque
                                                        ea esse inventore odit voluptate. Accusantium asperiores at
                                                        doloremque ex impedit ipsa itaque. Consequuntur dignissim.</p>
                                                 
                                                </div><!-- end lecture-overview-stats-item -->
                                            </div><!-- end lecture-overview-stats-wrap -->
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">

                                        </div><!-- end lecture-overview-item -->
                                    </div><!-- end lecture-overview-wrap -->
                                </div><!-- end tab-pane -->


                            </div><!-- end tab-content -->
                        </div><!-- end lecture-video-detail-body -->
                    </div><!-- end lecture-video-detail -->

                </div><!-- end course-dashboard-column -->
                <div class="course-dashboard-sidebar-column">
                    <button class="sidebar-open" type="button"><i class="la la-angle-left"></i> Course
                        content</button>
                    <div class="course-dashboard-sidebar-wrap custom-scrollbar-styled">
                        <div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
                            <h3 class="fs-18 font-weight-semi-bold">Course content</h3>
                            <button class="sidebar-close" type="button"><i class="la la-times"></i></button>
                        </div><!-- end course-dashboard-side-heading -->
                        <div class="course-dashboard-side-content">
                            <div class="accordion generic-accordion generic--accordion" id="accordionCourseExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <i class="la la-angle-down"></i>
                                            <i class="la la-angle-up"></i>
                                            <span class="fs-15"> Section 1: Dive in and Discover After Effects</span>
                                            <span class="course-duration">
                                                <span>1/5</span>
                                                <span>21min</span>
                                            </span>
                                        </button>
                                    </div><!-- end card-header -->
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionCourseExample">
                                        <div class="card-body p-0">
                                            <ul class="curriculum-sidebar-list">
                                                <li class="course-item-link active">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="courseCheckbox" required>
                                                            <label class="custom-control-label custom--control-label"
                                                                for="courseCheckbox"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">1. Let's Have Fun - Seriously!</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i
                                                                        class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="courseCheckbox2" required>
                                                            <label class="custom-control-label custom--control-label"
                                                                for="courseCheckbox2"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">2. A simple concept to get ahead</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i
                                                                        class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link active-resource">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="courseCheckbox3" required>
                                                            <label class="custom-control-label custom--control-label"
                                                                for="courseCheckbox3"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">3. Download your Footage for your Quick
                                                                Start</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i
                                                                    class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="courseCheckbox4" required>
                                                            <label class="custom-control-label custom--control-label"
                                                                for="courseCheckbox4"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">4. Jump in and Animate your Character
                                                            </h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i
                                                                        class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                            </ul>
                                        </div><!-- end card-body -->
                                    </div><!-- end collapse -->
                                </div><!-- end card -->
                            </div><!-- end accordion-->
                        </div><!-- end course-dashboard-side-content -->
                    </div><!-- end course-dashboard-sidebar-wrap -->
                </div><!-- end course-dashboard-sidebar-column -->
            </div><!-- end course-dashboard-container -->
        </div><!-- end course-dashboard-wrap -->
    </section><!-- end course-dashboard -->
    <!--======================================
        END COURSE-DASHBOARD
======================================-->

    <!-- start scroll top -->
    <div id="scroll-top">
        <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <!-- template js files -->
    <script src="{{ asset('user_asset/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/isotope.js') }}"></script>
    <script src="{{ asset('user_asset/js/waypoint.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/fancybox.js') }}"></script>
    <script src="{{ asset('user_asset/js/plyr.js') }}"></script>
    <script src="{{ asset('user_asset/js/datedropper.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/emojionearea.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/jquery-te-1.4.0.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/jquery.MultiFile.min.js') }}"></script>
    <script src="{{ asset('user_asset/js/main.js') }}"></script>
    <script>
        var player = new Plyr('#player');
    </script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/lesson-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 00:43:14 GMT -->

</html>
