<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JAGA BUMI</title>

  @include('includes.admin.style')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Navbar -->
  @include('includes.admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">JAGA BUMI</span>
    </a>

    <!-- Sidebar -->
    @include('includes.admin.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('header-name')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     @yield('content')
  </div>
  <!-- /.content-header -->
  
  <!-- /.content-wrapper -->

  @include('includes.admin.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
{{-- @include('sweetalert::alert') --}}
@stack('prepend-script')
@include('includes.admin.script')
@stack('addon-script')

</body>
</html>
