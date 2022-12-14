<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IHAZE FARMING | Form</title>
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
<style>
  body{
    background:black;
  }
</style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">About us</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
           <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">

      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">



      <span class="brand-text font-weight-light">IHAZE FARMING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
     <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open" class="nav-item">
            <a href="index.php" >

              <p>
                <i class="nav-icon fas fa-tachometer-alt"></i>Dashboard
</p>
            </a>
            <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="#" class="nav-link">

              <p>
                <i class='fa-solid fa-temperature-full' style='color:#36b065'></i>
                 Temperature <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pond_temd.php" class="nav-link">
                  <i class='fa-solid fa-temperature-full' style='color:#065c27'></i>

                  <p>Pond-temperature</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fish_temd.php" class="nav-link">
                  <i class='fa-solid fa-temperature-full' style='color:#065c27'></i>

                  <p>Food-temperature</p>
                </a>
              </li>
             </ul>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-droplet" style="color:#065c27"></i>
              <p>
                Humidity
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pond_humd.php" class="nav-link">
                  <i class="fa-solid fa-droplet" style="color:#065c27"></i>
                  <p>Pond-Humidity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fish_humd.php" class="nav-link">
                  <i class="fa-solid fa-droplet" style="color:#065c27"></i>
                  <p>food-humidity</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-level-up"></i><i class="fa-solid fa-turn-down"></i>
              <p>
                Level
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tank_levd.php" class="nav-link">
                  <i class="fa-solid fa-dial-med-low"></i>
                  <p>Tank-level (L)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fish_levd.php" class="nav-link">
                  <i class="fa-solid fa-dial-med-low"></i>
                  <p>Water-level (L)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fish_wid.php" class="nav-link">
                  <i class="fa-solid fa-dial-med-low"></i>
                  <p>Food-Weight (KG)</p>
                </a>
              </li>

            </ul>
          </li>



               </ul>
               <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa-regular fa-snowflake" style='color:#a16a0b'></i>

                    <p>
                    Atmospheric
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="atm_temd.php" class="nav-link">
                        <i class='fa-solid fa-temperature-full' style='color:#065c27'></i>

                        <p>temperature</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="atm_humd.php" class="nav-link">
                        <i class="fa-solid fa-droplet" style="color:#065c27"></i>

                        <p>Humidity</p>
                      </a>
                    </li>
                  </ul>
                </ul>
                <ul class="nav nav-treeview">

<li class="nav-item">
  <a href="tds.php" class="nav-link">
                     <i class="fa-solid fa-droplet" style="color:#065c27"></i>

    <p>
    tds and tub

    </p>
  </a></li></ul>
                <ul class="nav nav-treeview">

                 <li class="nav-item">
                   <a href="data.html" class="nav-link">
                                      <i class="fa-solid fa-droplet" style="color:#065c27"></i>

                     <p>
                     Form-data

                     </p>
                   </a>



                <!-- /.sidebar-menu -->
              </div>
    <!-- /.sidebar -->
  </aside>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <p>TEMPERATURE</p>
              <div class="inner"><?php $connect = mysqli_connect("localhost", "root", "", "ihaze");
              $query = $connect->query("SELECT * FROM pond_temperature order by id DESC limit 1 ");
              $query=mysqli_fetch_array($query);
              $quer = $connect->query("SELECT * FROM fish_temperature order by id DESC limit 1 ");
              $quer=mysqli_fetch_array($quer);
              $queryat = $connect->query("SELECT * FROM atmospheric order by id DESC limit 1 ");
              $queryat=mysqli_fetch_array($queryat);
              $querlev = $connect->query("SELECT * FROM water_level order by id DESC limit 1 ");
              $querlev=mysqli_fetch_array($querlev);
              $querwe = $connect->query("SELECT * FROM weight order by id DESC limit 1 ");
              $querwe=mysqli_fetch_array($querwe);
          ?>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?php echo $query[1]; ?><sup style="font-size: 20px">c</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $quer[1]; ?><sup style="font-size: 20px">c</sup></h3>

                <p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;pond &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  food</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <style>.inner h3,p{color:white;}</style>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>HUMUDITY</p>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?php echo $query[2]; ?><sup style="font-size: 20px">%</sup> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?php echo $quer[2]; ?><sup style="font-size: 20px">%</sup>
                </h3>

                <p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  pond&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;food</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p> WATER LEVEL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ``WEIGHT</p>
                <h3><?php echo $querlev[2]; ?><sup style="font-size: 20px">l</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $querlev[2]; ?><sup style="font-size: 20px">l</sup>
                   &nbsp;&nbsp;<?php echo $querwe[1]; ?><sup style="font-size: 20px">kg</sup></h3>
                <P>tank  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  pond&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;food</P>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>ATMOSPHERIC</p>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $queryat[1]; ?><sup style="font-size: 20px">c</sup>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $queryat[2]; ?><sup style="font-size: 20px">c</sup></h3>

                <p>temperature  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;humudity</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
     <center> <form method="POST"><table border="0px" cellpadding="1" cellspacing="4"><tr>
     <td> <button name="kg">Food_weight_chart</button></td>
     <td> <button name="pond">pond_temperature_humidity_chart</button></td>
     <td> <button name="food">food_temperature_humudity_chart</button>
     <td><button name="atm">Atmospheric_humidity_chart</button></td>
     <td><button name="water">Water_level_chart</button></td>
     <td><button name="tds">tds_turb_chart</button></td>


    </form></td></tr></table>
<?php
if (isset($_POST['kg'])) {

include 'wechart.php';
}
if (isset($_POST['water'])) {

  include 'level.php';

  }
  if (isset($_POST['pond'])) {

    include 'pond_chart.php';
    }
    if (isset($_POST['food'])) {

      include 'food_chart.php';

      }
      if (isset($_POST['atm'])) {

        include 'atm_chart.php';

        }
        if (isset($_POST['tds'])) {

          include 'tds_chart.php';

          }

 ?>

 </center>
   <footer class="main-footer" style="margin-top: 310px; margin-right: 220px; background:#343a40;">
    <strong>Copyright &copy; 2022--- <a href="">Bjay techs</a>.</strong>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By
    <div class="float-right d-none d-sm-inline-block">
      <b>Ihaze Farming</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
