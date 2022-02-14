<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendors Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.3/af-2.3.7/date-1.1.1/r-2.2.9/sb-1.3.0/datatables.min.css"/>
    <title>OHMS - Online Hospital Management System</title>

    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
</head>

<body>

<!-- Start Sidemenu Area -->
@include('back-end.layouts.sidemenu')

<!-- End Sidemenu Area -->

<!-- Start Main Content Wrapper Area -->
<div class="main-content d-flex flex-column">

    <!-- Top Navbar Area -->
    <nav class="navbar top-navbar navbar-expand">
        <div class="collapse navbar-collapse" id="navbarSupportContent">
            <div class="responsive-burger-menu d-block d-lg-none">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>

            <form class="nav-search-form d-none ml-auto d-md-block">
                <label><i class='bx bx-search'></i></label>
                <input type="text" class="form-control" placeholder="Search here...">
            </form>

            <ul class="navbar-nav right-nav align-items-center">
                <li class="nav-item dropdown language-switch-nav-item">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="assets/img/us-flag.jpg" alt="image">
                        <span>English <i class='bx bx-chevron-down'></i></span>
                    </a>

                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item d-flex justify-content-between align-items-center">
                            <span>German</span>

                            <img src="assets/img/germany-flag.jpg" alt="flag">
                        </a>
                    </div>
                </li>


                <li class="nav-item notification-box dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="notification-btn">
                            <i class='bx bx-bell'></i>

                            <span class="badge badge-secondary">5</span>
                        </div>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex justify-content-between align-items-center">
                            <span class="title d-inline-block">6 New Notifications</span>
                            <span class="mark-all-btn d-inline-block">Mark all as read</span>
                        </div>

                        <div class="dropdown-body">
                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-message-rounded-dots'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">Just sent a new message!</span>
                                    <p class="sub-text mb-0">2 sec ago</p>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-user'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">New customer registered</span>
                                    <p class="sub-text mb-0">5 sec ago</p>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-layer'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">Apps are ready for update</span>
                                    <p class="sub-text mb-0">3 min ago</p>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-hourglass'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">Your item is shipped</span>
                                    <p class="sub-text mb-0">7 min ago</p>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item d-flex align-items-center">
                                <div class="icon">
                                    <i class='bx bx-comment-dots'></i>
                                </div>

                                <div class="content">
                                    <span class="d-block">Steven commented on your post</span>
                                    <p class="sub-text mb-0">1 sec ago</p>
                                </div>
                            </a>
                        </div>

                        <div class="dropdown-footer">
                            <a href="#" class="dropdown-item">View All</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown profile-nav-item">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="menu-profile">
                            <span
                                class="name">{{Auth::user()->is_doctor == true ? 'Howdy, Dr.' : 'Hello,'}} {{Auth::user()->first_name }}</span>
                            <img src="assets/img/user1.jpg" class="rounded-circle" alt="image">
                        </div>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-header d-flex flex-column align-items-center">
                            <div class="figure mb-3">
                                <img src="assets/img/user1.jpg" class="rounded-circle" alt="image">
                            </div>

                            <div class="info text-center">
                                <span class="name">{{Auth::user()->first_name}}</span>
                                <p class="mb-3 email">{{Auth::user()->email}}</p>
                                <p class="mb-3 email">{{Auth::user()->phone_no}}</p>
                            </div>
                        </div>

                        <div class="dropdown-body">
                            <ul class="profile-nav p-0 pt-3">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class='bx bx-user'></i> <span>Profile</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class='bx bx-cog'></i> <span>Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-footer">
                            <ul class="profile-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class='bx bx-log-out'></i> <span>{{ __('Logout') }}</span>

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Top Navbar Area -->
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Dashboard</h1>

        <ol class="breadcrumb">
            <li class="item"><a href="{{ route('home') }}"><i class='bx bx-home-alt'></i></a></li>

            <li class="item">@yield('brad-title')</li>

{{--            <li class="item">Analytics</li>--}}
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- TODO:: Dashboard appeared section -->
    @yield('content')

    <div class="flex-grow-1"></div>

    <!-- Start Footer End -->
    @include('back-end.layouts.footer')
    <!-- End Footer End -->

</div>
<!-- End Main Content Wrapper Area -->

<!-- Vendors Min JS -->
<script src="{{asset('assets/js/vendors.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.3/af-2.3.7/date-1.1.1/r-2.2.9/sb-1.3.0/datatables.min.js"></script>
@yield('script')
<script>
    $(document).ready(function() {
        $('#dataTableView').DataTable();
    } );

</script>

</body>
</html>
