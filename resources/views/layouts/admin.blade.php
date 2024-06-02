<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalculator</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/dist/img/AdminLTELogo.png') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ Secure_asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ Secure_asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ Secure_asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{--  Jquery  --}}
    <script src="{{ Secure_asset('plugins/jquery/jquery.js') }}"></script>

    {{--  Tablas  --}}
    <link rel="stylesheet" href="{{ Secure_asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ Secure_asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ Secure_asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item d-inline-block">
                    <a href="/yoigo" class="nav-link"><img src="{{ url('/dist/img/yoigo.png') }}"</a>
                </li>
                <li class="nav-item  d-inline-block">
                    <a href="/masmovil" class="nav-link"><img src="{{ url('/dist/img/masmovil.png') }}"</a>
                </li>
                <li class="nav-item d-inline-block">
                    <a href="/movistar" class="nav-link"><img src="{{ url('/dist/img/movistar.png') }}"</a>
                </li>
                <li class="nav-item  d-inline-block">
                    <a href="/vodafone" class="nav-link"><img src="{{ url('/dist/img/vodafone.png') }}"</a>
                </li>
                <li class="nav-item  d-inline-block">
                    <a href="/orange" class="nav-link"><img src="{{ url('/dist/img/orange.png') }}"</a>
                </li>
                <li class="nav-item  d-inline-block">
                    <a href="/jazztel" class="nav-link"><img src="{{ url('/dist/img/jazztel.png') }}"</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ url('/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Kalculadora</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    @can('admin')

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Usuario
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('users/create') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Nuevo usuario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('users') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado usuario</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Marca
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('marcas/create') }}" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Nueva marca</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('marcas') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Tipo producto
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('tipos/create') }}" class="nav-link active">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Nuevo tipo producto</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('tipos') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Listado tipos producto</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                    role="menu" data-accordion="false">
                                    <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                            <p>
                                                Producto
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ url('productos/create') }}" class="nav-link active">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Nuevo producto</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('productos') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Listado producto</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                        role="menu" data-accordion="false">
                                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active">
                                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                                <p>
                                                    Descuento
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{ url('descuentos/create') }}" class="nav-link active">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Nuevo descuento</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('descuentos') }}" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p>Listado descuento</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                            role="menu" data-accordion="false">
                                            <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                                            <li class="nav-item">
                                                <a href="#" class="nav-link active">
                                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                                    <p>
                                                        Codificacion
                                                        <i class="right fas fa-angle-left"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a href="{{ url('codificaciones/create') }}"
                                                            class="nav-link active">
                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>Nuevo codificacion</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ url('codificaciones') }}" class="nav-link">
                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>Listado codificacion</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                                    <ul class="nav nav-pills nav-sidebar flex-column"
                                                        data-widget="treeview" role="menu" data-accordion="false">
                                                        <!-- Add icons to the links using the .nav-icon class
                               with font-awesome or any other icon font library -->
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link active">
                                                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                                                <p>
                                                                    Registro
                                                                    <i class="right fas fa-angle-left"></i>
                                                                </p>
                                                            </a>
                                                            <ul class="nav nav-treeview">
                                                                <li class="nav-item">
                                                                    <a href="{{ url('registros/create') }}"
                                                                        class="nav-link active">
                                                                        <i class="far fa-circle nav-icon"></i>
                                                                        <p>Nuevo registro</p>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{ url('registros') }}"
                                                                        class="nav-link">
                                                                        <i class="far fa-circle nav-icon"></i>
                                                                        <p>Listado registro</p>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                        @endcan
                                                    
                                                        <br>
                                                        <li class="nav-item">
                                                            <a class="nav-link badge-danger"
                                                                href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                Cerrar sesión
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>

                                                        </li>
                                                    </ul>
                                                    <br>
    <center>
                                                    <img src="{{ url('/dist/img/logo.png') }}" width="80%">
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <br>
            <div class="content">
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2024 <a href="https://kalculadora-production.up.railway.app">Kalculadora</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ Secure_asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ Secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{--  Tablas  --}}
    <script src="{{ Secure_asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ Secure_asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ Secure_asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <!-- AdminLTE App -->
    <script src="{{ Secure_asset('dist/js/adminlte.min.js') }}"></script>



</body>

</html>
