<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="5MJGP2biLBYzZ7sUhMubarzONLOgg0n7dhY4g1s6">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/admin_assets/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/adminlte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        
        @yield('CSS')
        
    </head>
    <body class="sidebar-mini sidebar-collapse" data-scrollbar-theme="os-theme-dark" >
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand-md" style="background-color:#fff;color:black">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" style="background-color:#62929E;color:white">
                            <i class="fas fa-bars"></i>
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name={{ Auth::User()->firstname }}+{{ Auth::User()->lastname }}&rounded=true" class="user-image img-circle elevation-2">
                            <span class="d-none d-md-inline" style="color:white">{{Auth::User()->firstname}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="background-color:#62929E">
                            <li class="user-header">
                                <img src="https://ui-avatars.com/api/?name={{ Auth::User()->firstname }}+{{ Auth::User()->lastname }}&rounded=true" class="img-circle elevation-2">
                                <p class="text monospace" style="color:white">{{Auth::User()->firstname}}</p>
                            </li>
                            <li class="user-footer">
                                <a class="btn btn-default btn-flat float-right btn-block sublog" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-power-off"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <aside class="main-sidebar  elevation-4">
                <a href="{{ url('/admin/home') }}" class="brand-link">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::User()->firstname }}+{{ Auth::User()->lastname }}&rounded=true" class="brand-image img-circle elevation-3" style="opacity:.8">
                    <span class="brand-text font-weight-light ">
                        <b>{{Auth::User()->firstname}}</b>
                    </span>
                </a>
                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                            <li class="nav-header">MY PANEL</li>
                            <li class="nav-item has-treeview">
                                <a class="nav-link nav-item" href="#">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    <p>Manage Categories<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/categories/add') }}">
                                            <i class="fas fa-plus"></i>
                                            <p>Add Category</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/categories/view') }}">
                                            <i class="fas fa-eye"></i>
                                            <p>View Category</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        
                            <li class="nav-item has-treeview">
                                <a class="nav-link nav-item" href="#">
                                <i class="fa fa-tag" aria-hidden="true"></i>

                                    <p>Manage Products<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/products/add') }}">
                                            <i class="fas fa-plus"></i>
                                            <p>Add Product</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/products/view') }}">
                                            <i class="fas fa-eye"></i>
                                            <p>View Products</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                             <li class="nav-item has-treeview">
                                <a class="nav-link nav-item" href="#">
                                    <i class="fab fa-envira"></i>
                                    <p>Visual<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/visual/add') }}">
                                            <i class="fas fa-plus"></i>
                                            <p>Add Visual</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/visual/view') }}">
                                            <i class="fas fa-eye"></i>
                                            <p>View Visual</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                           
                            <li class="nav-item has-treeview">
                                <a class="nav-link nav-item" href="#">
                                <i class="fa fa-rss" aria-hidden="true"></i>

                                    <p>Manage Blogs<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/blogs/add') }}">
                                            <i class="fas fa-plus"></i>
                                            <p>Add Blog</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/blogs/view') }}">
                                            <i class="fas fa-eye"></i>
                                            <p>View Blogs</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" >
                                <i class="fab fa-forumbee" aria-hidden="true"></i>


                                    <p>Enquiries</p>
                                </a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-user" aria-hidden="true"></i>

                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="content-wrapper">
                <br>
                @yield('content')
                @yield('modal')
            </div>
        </div>
        <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
        @yield('JS')
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('/vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
        <script>
    $(".check_all").on("click", function(){
        $(".custom_name").each(function(){
            $(this).attr("checked", true);
        });
    });
</script>
    </body>
</html>