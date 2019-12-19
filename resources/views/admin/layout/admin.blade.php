<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SPARK ADMIN | @yield('judul_halaman')</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/lte/dist/css/adminlte.min.css') }}">
  <!-- jQuery -->
  <script src="{{ asset('backend/lte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Data Table -->
  <link rel="stylesheet" href="{{ asset('backend/css/datatables.min.css') }}">
  <!-- SweetAlert -->
  <link rel="stylesheet" href="{{ asset('backend/lte/plugins/sweetalert2/sweetalert2.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@include('admin/layout/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('admin/layout/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('content')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
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
@include('admin/layout/footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- Bootstrap 4 -->
<script src="{{ asset('backend/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/lte/dist/js/adminlte.min.js') }}"></script>
<!-- SweetAlert -->
<script src="{{ asset('backend/lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- DataTable -->
<script src="{{ asset('backend/js/datatables.min.js') }}"></script>
<!-- App scripts -->
@stack('scripts')
</body>
</html>
