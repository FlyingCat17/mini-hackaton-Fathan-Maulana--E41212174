<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'FlyingCat' }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('bootstrap/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/styles.min.css') }}" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    @yield('link_href')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <h4>Laravel App</h4>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                @include('admin.layouts.bootstrap.sidebar')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('bootstrap/images/profile/user-1.jpg') }}" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <form action="{{ route('logout.destroy') }}" method="POST">
                                            @csrf
                                            <button class="btn btn-outline-danger mx-3 mt-2 d-block" type="submit">
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                @yield('content')
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Developed by <a href="https://github.com/FlyingCat17" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">FlyingCat</a> Distributed by <a
                            href="#">Workshop Web Framework</a></p>
                </div>
            </div>
        </div>
    </div>

    @yield('script')
    <script src="{{ asset('bootstrap/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('bootstrap/js/app.min.js') }}"></script>
    <script src="{{ asset('bootstrap/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('bootstrap/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('bootstrap/js/dashboard.js') }}"></script>
</body>

</html>
