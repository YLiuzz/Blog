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

    <title>造口頁</title>

    <!-- Bootstrap -->
    <link href="./gentelella_assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./gentelella_assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./gentelella_assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./gentelella_assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="./gentelella_assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./gentelella_assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="./gentelella_assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="./gentelella_assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="./gentelella_assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="./gentelella_assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="./gentelella_assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="./gentelella_assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./gentelella_assets/vendors/css/bootstrap-datetimepicker.min.css" />
    <!-- Switchery -->
    <link href="./gentelella_assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="./gentelella_assets/build/css/custom.min.css" rel="stylesheet">


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
              <span>造口頁</span>
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2 class="layout_title"></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>造口頁</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-font"></i> 最新消息管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="./gentelella/news_list">消息列表</a></li>
                      <li><a href="./gentelella/news_add">新增消息</a></li>
                    </ul>
                  </li>                     
                  <li><a href="./gentelella/join_list"><i class="fa fa-file-image-o"></i> 參加人數總覽</a></li>
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
                    <img src="" alt="" class="profile_img"><span class="layout_title"></span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:void(0)" class="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
    <script src="./gentelella_assets/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="./gentelella_assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="./gentelella_assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./gentelella_assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <!-- <script src="./gentelella_assets/vendors/validator/validator.js"></script> -->
    <!-- Chart.js -->
    <script src="./gentelella_assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="./gentelella_assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./gentelella_assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="./gentelella_assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="./gentelella_assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="./gentelella_assets/vendors/Flot/jquery.flot.js"></script>
    <script src="./gentelella_assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="./gentelella_assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="./gentelella_assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="./gentelella_assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="./gentelella_assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="./gentelella_assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="./gentelella_assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="./gentelella_assets/vendors/DateJS/build/date.js"></script>
    <script src="./gentelella_assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="./gentelella_assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="./gentelella_assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="./gentelella_assets/vendors/moment/min/moment.min.js"></script>
    <script src="./gentelella_assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="./gentelella_assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="./gentelella_assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="./gentelella_assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="./gentelella_assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="./gentelella_assets/vendors/switchery/dist/switchery.min.js"></script>
    <script src="./gentelella_assets/build/js/custom.min.js"></script>
    <script src="./gentelella_assets/vendors/js/bootstrap-datetimepicker.min.js"></script>
    <script src="./gentelella_assets/vendors/js/jquery.url.js"></script>
<script>

  $(function(){
      // 判斷角色
      var myId = "<?=$_SESSION['manager_id']; ?>";
      $.ajax({
          url : "./api_gentelella/get_manager",
          data : {
              "manager_id" : myId
          },
          dataType : "json"
      }).done(function(data){
          // 分角色出現按鈕 0管理員
          var level = data.manager_info.level;
          console.log(level)
          var levelName = "";
              console.log(level)
          switch ( level ){
              case "0" :
                  levelName = "管理員"
              break;
          }
          $(".layout_title").text( levelName + "：" + data.manager_info.manager_name);
      })

      $(".logout").click(function(e){
        e.preventDefault();
        $.ajax({
          url : 'api_gentelella/logout',
          dataType : 'json',
          type : "post"
        }).done(function(data){
          console.log(data)
          if( data.sys_code == 200 ){
            location.href = './gentelella/login'
          }
        })
      })
  })
  </script>
</html>
