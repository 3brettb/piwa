<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PIWA - Project and Issue Management Web Application">
    <meta name="author" content="Brett Brist">
    <meta name="keyword" content="Project,Project Management,Issue,Issue Tracking,PIWA,Project Issue,Project Issue Web App">
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}">
    <title>PIWA - Project Management</title>

    <!-- Icons -->
    <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ URL::asset('css/coreui.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/piwa.css') }}" rel="stylesheet">
</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

@auth
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
@else
<body class="app header-fixed">
@endauth
    <header class="app-header navbar">
        @auth
            <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">☰</button>
        @endauth

        <!-- Top Nav Bar -->
        <!-- @include('menus.top') -->

        <!-- User Nav - Top Right -->
        @guest
            @include('menus.guest')
        @else
            @include('menus.user')
        @endguest   

        @auth
            <!-- Right Side Panel Toggle Button -->
            <button class="navbar-toggler aside-menu-toggler" type="button">☰</button>
        @endauth

    </header>

    <div class="app-body">
        
        @auth
            <!-- Left Sidebar -->
            @include('menus.left')
        @endauth

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb Banner -->
            <ol class="breadcrumb">
                @yield('breadcrumb')

                <!-- Breadcrumb Menu Banner-->
                <!--@include('menus.banner')-->

            </ol>


            <div class="container-fluid">
                <div class="animated fadeIn">
                    
                    @yield('content')
                
                </div>  
            </div>
            <!-- /.conainer-fluid -->
        </main>

        @auth
            <!-- Right Slide-In Menu Panel -->
            @include('menus.right')
        @endauth

    </div>

    <footer class="app-footer">
        <a href="http://brettbrist.blackfiddle.net">Brett Brist</a> © 2017 blackfiddle.net
        <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>, <a href="http://laravel.com">Laravel</a>
        </span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/pace-progress/pace.min.js') }}"></script>


    <!-- Plugins and scripts required by all views -->
    <!--<script src="{{ URL::asset('vendors/chart.js/dist/Chart.min.js') }}"></script>-->


    <!-- GenesisUI main scripts -->

    <script src="{{ URL::asset('js/coreui.js') }}"></script>


    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <!--<script src="{{ URL::asset('js/views/main.js') }}"></script>-->

    @stack('js')

    <script>

        $(document).on('ready', function(){

            @stack('on_ready')

        });

    </script>

</body>

</html>