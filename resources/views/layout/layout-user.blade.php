<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet">
    
    <link href="/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendors/nprogress/nprogress.css" rel="stylesheet">

</head>
<style>
  .ck{
    color: #fff !important;
  }
</style>
<body class="">

    @yield('konten')

    <!-- jQuery -->
    <script src="/assets/vendors/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap -->
   <script src="/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- Datatables -->
    <script src="/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    
     <!-- NProgress -->
     <script src="/assets/vendors/nprogress/nprogress.js"></script>
     <script src="/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
 

    <!-- Custom Theme Scripts -->
    <script src="/assets/js/custom.min.js"></script>
      
</body>
</html>