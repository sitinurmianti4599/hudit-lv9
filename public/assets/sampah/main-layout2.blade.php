<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> -->   
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
      <!-- bootstrap css -->
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
      <!-- Custom Theme Style -->
      <link rel="stylesheet" href="/assets/css/custom.min.css">
      <!-- site css -->
      <link rel="stylesheet" href="/assets/css/style.css"/>
      <link rel="stylesheet" href="/assets/css/responsive.css" />
      <link href="/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet">
      <link href="/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
      <link href="/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
      <link href="/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

      <link href="/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
      <link href="/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header" >
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="/assets/images/logo.png" alt="#" /></a>
                     </div>
                     <div class=" sidebar_user_info" >
                        <a href="index.html"><img class="img-responsive mb-2" src="/assets/images/logohd.png" alt="#" /></a>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4><div class="user_profle_side ">
                        <img class="img-responsive rounded-circle " src="/assets/images/user.png" alt="#" />
                        <div class="user_info">
                           <h6><b>John David</b></h6>
                           <p><span class=""></span> Admin</p>
                        </div>
                     </div></h4>


                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="/"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <li><a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color" style="float:r"></i><span>Pelayanan</span></a>
                        <ul class="collapse" id="element">
                           <li><a href="pelanggan">> <span>Pendirian Badan Usaha</span></a></li>
                           <li><a href="detail-pelanggan">> <span>Hukum Perusahaan</span></a></li>
                           <li><a href="icons.html">> <span>Hukum Perorangan</span></a></li>
                        </ul>
                     </li>
                     <li><a href="data-master"><i class="fa fa-table purple_color2"></i> <span>Data Master</span></a></li>
                     <li><a href="laporan"><i class="fa fa-bar-chart-o green_color"></i> <span> Laporan</span></a></li>
                     {{-- <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li> --}}
                     
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle" style="background-color: transparent;"><i class="fa fa-bars"></i></button>
                       
                        <div class="p-0" style="float: right;" >
                           <div class="icon_info" >
                              <ul class="user_profile_dd">
                                 <li style="background-color: transparent;">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle"  src="assets/images/user.png" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">Profile</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               @yield('konten')
                     
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <!-- jQuery -->
    <script src="/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="/assets/vendors/nprogress/nprogress.js"></script>

   <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Datatables -->
    <script src="/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
   <script src="assets/js/custom.min.js"></script>
   <script src="assets/js/custom2.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      

      
   </body>
</html>