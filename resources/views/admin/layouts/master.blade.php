<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('admin.partials.link')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <!-- Main Header -->
  @include('admin.partials.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.partials.slider')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content')
    

  </div>

  <!-- Main Footer -->
  @include('admin.partials.footer')

  <!-- Control Sidebar -->
  @include('admin.partials.slidebar')

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
@include('admin.partials.script')

</body>
</html>
