<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <base href="<?=base_url(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Blog後台</title>

    <!-- Bootstrap -->
    <link href="./blog_assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./blog_assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./blog_assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./blog_assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="./blog_assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./blog_assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="./blog_assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="./blog_assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="./blog_assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="./blog_assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="./blog_assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="./blog_assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./blog_assets/vendors/css/bootstrap-datetimepicker.min.css" />
    <!-- Switchery -->
    <link href="./blog_assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="./blog_assets/build/css/custom.min.css" rel="stylesheet">


  </head>
  <style>
  .left_col {
    background: #344da1;
  }
  .nav_title {
    width: 230px;
    float: left;
    background: #344da1;
    border-radius: 0;
    height: 57px;
  }
  </style>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="./gentelella" class="site_title">
              <!-- <i class="fa fa-paw"></i>  -->
              <span>Blog</span>
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,<?=$_SESSION['user_id']; ?></span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Blog</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-font"></i> 文章內容管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="./gentelella/news_list">文章列表</a></li>
                    </ul>
                  </li>                     
                  <li><a href="./gentelella/join_list"><i class="fa fa-file-image-o"></i> 個人資料設定</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="javascript:void(0)" class="logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="" class="profile_img"><span class="layout_title">使用者:<?=$_SESSION['user_id']; ?></span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a id='logout' class="logout"><i class="fa fa-sign-out pull-right"></i>登出</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <?php $this->load->view($path); ?>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           © 2017 . All rights reserved
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    
	
  </body>
      <!-- jQuery -->
    <script src="./blog_assets/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="./blog_assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="./blog_assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./blog_assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <!-- <script src="./gentelella_assets/vendors/validator/validator.js"></script> -->
    <!-- Chart.js -->
    <script src="./blog_assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="./blog_assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./blog_assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="./blog_assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="./blog_assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="./blog_assets/vendors/Flot/jquery.flot.js"></script>
    <script src="./blog_assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="./blog_assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="./blog_assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="./blog_assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="./blog_assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="./blog_assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="./blog_assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="./blog_assets/vendors/DateJS/build/date.js"></script>
    <script src="./blog_assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="./blog_assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="./blog_assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="./blog_assets/vendors/moment/min/moment.min.js"></script>
    <script src="./blog_assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="./blog_assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./blog_assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="./blog_assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="./blog_assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="./blog_assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="./blog_assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="./blog_assets/vendors/switchery/dist/switchery.min.js"></script>
    <script src="./blog_assets/build/js/custom.min.js"></script>
    <script src="./blog_assets/vendors/js/bootstrap-datetimepicker.min.js"></script>
    <script src="./blog_assets/vendors/js/jquery.url.js"></script>
<script>

  $(function(){

    $("body").on("click","#logout",function(){
            location.href="./logout";	
        })
    

      
  })
  </script>
</html>
