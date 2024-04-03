@extends("layouts.app")

@section("app_content")
  <!-- Navbar -->
  @include("admin.includes.navbar")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include("admin.includes.sidebar")


  <!-- Control Sidebar -->
  @include("admin.includes.right")
  <!-- /.control-sidebar -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield("master_content")
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
@stop
