<?php 
@session_start();
include ('cek_admin.php');
include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Halaman Utama Admin</title>
  <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Halaman Utama Admin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container-fluid">

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Klinik Utama Waluya</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="?page=home"><span class="glyphicon glyphicon-home"></span>     Home <span class="sr-only">(current)</span></a></li>
          <li><a href="?page=pasien"><span class="glyphicon glyphicon-user"></span>     Pasien</a></li>
          <li class="dropdown">
            <a href=" " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Dokter <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?page=dokter">Data Dokter</a></li>
              <li><a href="?page=dokter&action=data_jadwal">Jadwal Dokter</a></li>
            </ul>
          </li>
          <li><a href="?page=obat"><span class="glyphicon glyphicon-tint"></span>     Obat</a></li>
          <li><a href="?page=kunjungan"><span class="glyphicon glyphicon-user"></span>     Kunjungan</a></li>
          <li><a href="?page=rekam_medis&action=data_rm"><span class="glyphicon glyphicon-plus"></span>     Rekam Medis</a></li>
          <li class="dropdown">
            <a href=" " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file"></span>     Report <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?page=laporan">Laporan Kunjungan</a></li>
              <li><a href="?page=laporan&action=laporan_pasien">Laporan Pasien</a></li>
            </ul>
          </li>
          <li><a href="?page=user"><span class="glyphicon glyphicon-user"></span>     User</a></li>
          </ul>


        <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_SESSION['username']; ?></a></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>     Logout</a></li>          
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div id="isi">
  <?php
  $page = @$_GET['page'];
  $action = @$_GET['action'];
  if($page == "pasien"){
    if($action == ""){
      include "admin/data_pasien.php";
    } else if ($action == "edit_pasien"){
      include "admin/edit_pasien.php";
    } else if ($action == "hapus_pasien"){
      include "admin/hapus_pasien.php";
    } else if ($action == "tambah_pasien"){
      include "admin/tambah_pasien.php";
    }

  } else if($page == "dokter"){
    if($action == ""){
      include "admin/data_dokter.php";
    } else if ($action == "data_jadwal"){
      include "admin/data_jadwal.php";
    } else if ($action == "edit_dokter"){
      include "admin/edit_dokter.php";
    } else if ($action == "hapus_dokter"){
      include "admin/hapus_dokter.php";
    } else if ($action == "tambah_dokter"){
      include "admin/tambah_dokter.php";
    } else if ($action == "edit_jadwal"){
      include "admin/edit_jadwal.php";
    } else if ($action == "hapus_jadwal"){
      include "admin/hapus_jadwal.php";
    } else if ($action == "tambah_jadwal"){
      include "admin/tambah_jadwal.php";
    }

  } else if($page == "obat"){
    if($action == ""){
      include "admin/data_obat.php";
    } else if ($action == "tambah_obat"){
      include "admin/tambah_obat.php";
    } else if ($action == "edit_obat"){
      include "admin/edit_obat.php";
    } else if ($action == "hapus_obat"){
      include "admin/hapus_obat.php";
    }

  } else if($page == "kunjungan"){
    if($action == ""){
      include "admin/data_kunjungan.php";
    } else if($action == "tambah_kunjungan"){
      include "admin/tambah_kunjungan.php";
    } else if($action == "hapus_kunjungan"){
      include "admin/hapus_kunjungan.php";
    }

  } else if($page == "rekam_medis"){
    if($action == "data_rm"){
      include "admin/data_rm.php";
    }
  
  } else if($page == "home"){
    if($action == ""){
      include "admin/home.php";
    }

  } else if($page == "laporan"){
    if($action == ""){
      include "laporan/laporan_kunjungan.php";
    } else if($action == "laporan_pasien"){
      include "laporan/laporan_pasien.php";
    }

  } else if($page == "user"){
    if($action == ""){
      include "admin/user.php";
    } else if($action == "tambah_user"){
      include "admin/tambah_user.php";
    }
  }







  ?>
    
  </div>

    <div class="container-fluid">
      <div class="row copy text-center">
        <p>All Right Reserved 2017 | <a href=""></a></p>
        
      </div>
    </div>

    
  </div><!-- container fluid semua -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jqueryo.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

