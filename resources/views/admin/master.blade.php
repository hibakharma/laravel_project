<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('admin.layout.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('admin.layout.main_header')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('admin.layout.main_sidebar')



<!-- Main content -->
@yield('content')
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('admin.layout.footer')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.layout.footer_scripts')
</body>
</html>
