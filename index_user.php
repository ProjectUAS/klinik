<?php
include "inc/koneksi.php"; ?>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Selamat Datang di Sistem Informasi Klinik Utama Waluya </title>
    <script src="jquery-2.2.4.min.js"></script> <!-- Load library jquery -->
    <script src="process.js"></script> <!-- Load file process.js -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--Navigasi-->
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
				<a class="navbar-brand" href="index_user.php">Klinik Utama Waluya</a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="?page=home">Home</a></li>
				<li class="dropdown">
					<a href="?page=tentang_kami" class="dropdown-toggle`" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang Kami<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="?page=tentang_kami&action=visi_misi">Visi dan Misi</a></li>
					</ul>
				</li>

				

				<li class="dropdown">
					<a href="?page=pelayanan" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pelayanan<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="?page=pelayanan&action=jam_buka">Jam Buka</a></li>
		                <li><a href="?page=pelayanan&action=jadwal_dokter">Jadwal Dokter</a></li>
		                <li><a href="?page=pelayanan&action=sarana">Sarana dan Prasarana</a></li>
		                <li><a href="?page=pelayanan&action=ketentuan_obat">Ketentuan Berobat</a></li>
		            </ul> 
		        </li>

		        <li><a href="?page=registrasi">Registrasi Online</a></li>
		        <li><a href="?page=hubungi_kami">Hubungi Kami</a></li>
		    </ul>
		    </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
	<!--End Navigasi-->

	<div  id="isi">
		<?php
		$page = @$_GET['page'];
		$action = @$_GET['action'];
		if($page == "home"){
			if($action == ""){
				include "pages/home.php";
			}

		} else if($page == "tentang_kami"){
			if($action =="visi_misi"){
				include "pages/visi_misi.php";
			}
		} else if($page == "pelayanan"){
			if($action == "jam_buka"){
				include "pages/jam_buka.php";
			} else if($action == "jadwal_dokter"){
				include "pages/jadwal_dokter.php";
			} else if($action == "sarana"){
				include "pages/sarana.php";
			} else if($action == "ketentuan_obat"){
				include "pages/ket_obat.php";
			}
		} else if($page == "registrasi"){
			if($action == ""){
				include "pages/registrasi_online.php";
			}
		} else if($page == "hubungi_kami"){
			if($action == ""){
				include "pages/hubungi_kami.php";
			}
		}

		?>
		
	</div>

	

    <div class="container-fluid">
    	<div class="row copyright text-center">
    		<p>All Right Reserved 2017 | <a href=""></a></p>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jqueryo.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>