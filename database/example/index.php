<?php
session_start();
//restriced access page
if(!isset($_SESSION['username'])) {
  ?> 
<script type="text/javascript">
  document.location.href='login.php';
</script>
  <?php
}

//memasukan file koneksi
include('config/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - GudangKU</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GudangKu</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Menu Data<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=page/data_admin"><i class="fa fa-users"></i> Data Admin</a></li>
                <li><a href="?page=page/data_kategori"><i class="fa fa-table"></i> Data Kategori</a></li>
                <li><a href="?page=page/data_barang"><i class="fa fa-list"></i> Data Barang</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Transaksi Barang Masuk<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=page/data_brg_masuk"><i class="fa fa-sign-in"></i> Input Barang Masuk</a></li>
                <li><a href="?page=page/brg_masuk"><i class="fa fa-table"></i> Data Barang Masuk</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>Transaksi Barang Keluar<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=page/data_brg_keluar"><i class="fa fa-sign-out"></i> Input Barang Keluar</a></li>
                <li><a href="?page=page/brg_keluar"><i class="fa fa-table"></i> Data Barang Keluar</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User Menu <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="logout.php" onclick="return confirm('Yakin mau keluar?')"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

       <!--Untuk include halaman-->
	   <?php
		if(isset($_GET['page'])) {
			$hal=$_GET['page'].'.php';
      $cek=strlen($hal);
      if($cek<=0 || !file_exists($hal) || empty($hal)){
        echo "Halaman tidak ada";
      }else{        
       include($hal);
      }
		} else { 
			include ('page/home.php');
		}
	   ?>
        <!--Untuk include halaman-->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>