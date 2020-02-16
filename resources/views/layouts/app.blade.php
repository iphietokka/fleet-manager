<!DOCTYPE html>
<html>
<head>
@include('layouts.includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('layouts.includes.header')
  <!-- Left side column. contains the logo and sidebar -->
 
@include('layouts.includes.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
   @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.includes.footer')
</div>
<!-- ./wrapper -->
@yield('scripts')
@include('layouts.includes.scripts')

</body>
</html>
