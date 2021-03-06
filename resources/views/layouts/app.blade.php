<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.1/css/perfect-scrollbar.css">


    <title>{{ config('app.name', 'Checklister') }}</title>
</head>

<body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.html">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                    </svg> Dashboard<span class="badge badge-info">NEW</span></a>
            </li>

            <li class="c-sidebar-nav-title">Components</li>
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a
                    class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
                    </svg> Base</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"><span
                                class="c-sidebar-nav-icon"></span> Breadcrumb</a>
                    </li>
                </ul>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
                        </use>
                    </svg> {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
    </div>

    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }} "></use>
                </svg>
            </button>

            <ul class="c-header-nav ml-auto mr-4">
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                        </svg></a></li>
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}"></use>
                        </svg></a></li>
                <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                        </svg></a></li>
                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('img/avatars/6.jpg') }}"
                                alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a
                            class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                            </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item"
                            href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                                </use>
                            </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-task') }}"></use>
                            </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item"
                            href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-comment-square') }}">
                                </use>
                            </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
                        <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a
                            class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg> Profile</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                            </svg> Settings</a><a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                            </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                            </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg> Lock Account
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
                                </use>
                            </svg>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </header>
        <div class="c-body">
            <main class="c-main">
                @yield('content')
            </main>
        </div>
        <!-- perfect-scrollbar -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.1/perfect-scrollbar.min.js">
        </script>
        <!-- Optional JavaScript -->
        <!-- Popper.js first, then CoreUI JS -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>

</html>