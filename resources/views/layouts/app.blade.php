<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tqeda</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemonada">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/material-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-image: url(&quot;{{ asset('assets/img/26679.jpg') }}&quot;);">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="{{ url('/home') }}">
                    <div class="sidebar-brand-text mx-3"><span class="text-center" style="font-size: 34px;font-family: Lemonada, cursive;color: rgb(219,255,0);">TQEDA</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-tachometer-alt" style="color: rgb(219,255,0);font-size: 14px;"></i><span style="color: rgb(219,255,0);font-size: 14px;">Dashboard</span></a>
                        <a class="nav-link" href="{{ url('/products') }}"><i class="far fa-list-alt" style="color: rgb(219,255,0);font-size: 14px;"></i><span style="color: rgb(219,255,0);font-size: 14px;">Products</span></a>
                        <a class="nav-link" href="{{ url('/orders') }}"><i class="material-icons" style="color: rgb(219,255,0);font-size: 14px;">local_grocery_store</i><span style="color: rgb(219,255,0);font-size: 14px;">Orders</span></a>
                        <a class="nav-link" href="{{ url('/coupons') }}"><i class="icon ion-android-favorite" style="color: rgb(219,255,0);font-size: 14px;"></i><span style="color: rgb(219,255,0);font-size: 14px;">Coupons</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="background-image: url(&quot; {{ asset('assets/img/26679.jpg') }} &quot;);">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background-image: url(&quot; {{ asset('assets/img/26679.jpg') }} &quot;);">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button" style="background-color: rgb(219,255,0);"><i class="fas fa-search" style="color: rgb(0,0,0);"></i></button></div>
                            </div>
                        
                            
                        </form>
                        <h3 class="text-dark mb-0"></h3><a class="btn btn-primary d-none d-sm-inline-block" role="button" href="{{url('/logout')}}" style="background-color: rgb(167,26,26);color: rgb(255,255,255);"><i class="fa fa-sign-out" style="color: rgb(255,255,255); font-size: 15px;"></i>&nbsp;Log out</a>

                    </div>
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
        </div>
        <footer class="bg-white  sticky-footer" style="background-color: rgba(111,20,20,0);background-image: url(&quot; {{ asset('assets/img/26679.jpg') }} &quot;);">
            <div class="container  my-auto">
                <div class="text-left my-auto copyright"><span style="color: rgb(219,255,0);">Copyright © TQEDA 2021</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src=" {{ asset('assets/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>


</body>

</html>