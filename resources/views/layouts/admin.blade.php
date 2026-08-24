<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sistema de Estudiantes')</title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('dashboard') }}" class="nav-link">Inicio</a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('estudiantes.index') }}" class="nav-link">Estudiantes</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="brand-link">
            <img src="{{ asset('dist/img/AdminLTELogo.png') }}"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">

            <span class="brand-text font-weight-light">AdminLTE</span>
        </a>

        <!-- Menú lateral -->
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('estudiantes.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>Estudiantes</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- /.sidebar -->

    <!-- Contenido principal -->
    <div class="content-wrapper">

        <!-- Encabezado -->
        <section class="content-header">
            <div class="container-fluid">
                <h1>@yield('title', 'Panel')</h1>
            </div>
        </section>

        <!-- Contenido dinámico -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Proyecto Laravel - CRUD de Estudiantes.</strong>
        <div class="float-right d-none d-sm-inline-block">
            ECO6
        </div>
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!-- DataTables JS -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Scripts propios de cada vista hija -->
@stack('scripts')

</body>
</html>