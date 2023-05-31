<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>@yield('title')</title>

      <link rel="stylesheet" href="/assets/css/style.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <!-- Bootstrap -->
    <link href="/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">


   
    <link href="/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet">
      <link href="/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.css" rel="stylesheet">
      <link href="/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
      <link href="/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

      <link href="/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/assets/css/custom.min.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body ">
      <div class="main_container">
         <div class="navbar-static-top left_col2"> 
        <div class="col-md-3 left_col ">
          <div class="left_col scroll-view ">
          
            <div class="navbar nav_title logo_section " style="border: 0; ">
               
              <a href="/" class="site_title"><img class="logo_icon img-responsive me-3 "  src="/assets/images/logo.png" alt="#" /><b> Hukum Digital</b></a>
              <div style="border: 1px solid yellow; width:100%; margin-top:2px;"></div>
            </div>
                 
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic user_img">
                <img src="/assets/images/user.png" alt="..." class="rounded-circle img-responsive profile_img w-50 mt-4 ms-4" >
              </div>
              <div class="profile_info user_info">
               <h6>John Doe</h6>
                <p>Admin</p>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="/"><i class="fa fa-dashboard yellow_color"></i> Dashboard</a>  
                  </li>
                  <li ><a><i class="fa fa-object-group blue2_color"></i>Pelayanan <span class="fa fa-chevron-down"></span> </a>
                    <ul class="nav child_menu">
                      <li><a href="pelanggan">Pendirian Badan Usaha</a></li>
                      <li><a href="pelanggan">Hukum Perusahaan</a></li>
                      <li><a href="pelanggan">Hukum Perorangan</a></li>
                     </ul>
                  </li>
                  <li><a href="{{ route('web.data_master.index') }}"><i class="fa fa-table purple_color2"></i> Data Master</a>
                  </li> 

                  <li><a href="laporan"><i class="fa fa-bar-chart-o green_color"></i><span>Laporan</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
         </div>

        <!-- top navigation -->
        <div class="top_nav fixed-top">
            <div class="nav_menu ">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars" style="color:#fff;"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px; color:#fff;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false"  style="color: #fff;">
                      <img src="/assets/images/user.png" alt=""><b style="color: #fff;">John Doe</b>
                    </a>
  
                    <div class="dropdown-menu dropdown-usermenu pull-right mt-3" aria-labelledby="navbarDropdown" style="background:rgba(1, 2, 22, 0.863); ">
                      <a class="dropdown-item text-light fw-bold"  href="/profil"> Profile</a>
                      <a class="dropdown-item text-light fw-bold"  href="/login"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        
        <div class="right_col " role="main">
          
          @yield('konten')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        {{-- <footer>
          <div class="pull-right">
            Siti Nurmianti 2018
          </div>
          <div class="clearfix"></div>
        </footer> --}}
        <!-- /footer content -->
      </div>
    </div>
   
    <!-- jQuery -->
    <script src="/assets/vendors/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap -->
   <script src="/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- NProgress -->
    <script src="/assets/vendors/nprogress/nprogress.js"></script>
    <script src="/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="/assets/vendors/iCheck/icheck.min.js"></script>


    
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

    {{-- <!-- Custo --}}
    <!-- Custom Theme Scripts -->
    <script src="/assets/js/custom.min.js"></script>
    <script src="assets/js/custom2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      
  </body>
</html>