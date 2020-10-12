<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset("addmin/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("addmin/dist/css/adminlte.min.css")}}">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
      <!-- Begin Navbar -->
      @include('admin.includes.navbar')
      <!--End  Navbar -->
 

  <!-- Begin Sidebar  -->
  
      @include('admin.includes.sidebar')
<!-- End Sidebar  -->

  
  
<!-- Main content -->
    
        @yield('content')
    
<!-- End content -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Main Footer -->
    
   @include('admin.includes.footer')

</div>

<!-- REQUIRED SCRIPTS -->

<!-- DataTables  & Plugins -->
<script src="{{asset("addmin/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("addmin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("addmin/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("addmin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("addmin/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("addmin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>

<!-- jQuery -->
<script src="{{asset("addmin/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{asset("addmin/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE -->
<script src="{{asset("addmin/dist/js/adminlte.js")}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset("addmin/plugins/chart.js/Chart.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("addmin/dist/js/demo.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("addmin/dist/js/pages/dashboard3.js")}}"></script>
</body>
</html>
