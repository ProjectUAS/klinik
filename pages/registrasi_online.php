<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12" style="border: 1px solid silver";>

			<div class="page-header">
				<h3 align="center"> Registrasi Online </h3>
			</div>
			<?php
			mysql_connect("localhost","root","");
			mysql_select_db("db_web");
			$result = mysql_query("select * from tbl_pasien");
			$jsArray = "var prdName = new Array();\n";

			echo '<form class="form-horizontal" action="?page=registrasi" method="post" role="form">';
			echo '<div class="form-group">';
			echo '<label for="kode_pasien" class="control-label col-sm-3"> No. Rekam Medis</label>';
			echo '<div class="col-sm-8">';
			echo '<select class="form-control" name="kode_pasien" id="kode_pasien" onchange="changeValue(this.value)">';
			echo '<option>-- Pilih No. Rekam Medis --</option>';
			while ($row = mysql_fetch_array($result)) {
				echo '<option value="' . $row['kode_pasien'] . '">' . $row['kode_pasien'] . '</option>';
				$jsArray .= "prdName['" . $row['kode_pasien'] . "'] = {nama_pasien:'".addslashes($row['nama_pasien'])."'};\n";
			}
			echo '</select>';
			echo '</div>';
			?>

			<div class="form-group">
				<label for="nama_pasien" class="control-label col-sm-3"> Nama Pasien </label>
				<div class="col-sm-8">
					<input type="text" name="nama_pasien" id="nama_pasien" class="form-control">
				</div>
  			</div>

  			<div class="form-group">
  				<label for="nama_pasien" class="control-label col-sm-3"> Nama Dokter </label>
  				<div class="col-sm-8">
  					<select name="nama_dokter" class="form-control" style="width: 100%">-<option>--Pilih Dokter--</option>
					<?php
					$dd=mysql_query("select*from tbl_dokter");
					while($data_dokter=mysql_fetch_array($dd)){
					?>
					<option value="<?php echo $data_dokter['nama_dokter'];?>"><?php echo $data_dokter['nama_dokter']?>
					</option>
					<?php
					}
					?>
				</select>
  				</div>
  			</div>

  			<div class="form-group">
  				<label for="tgl_kunjung" class="control-label col-sm-3"> Tanggal Kunjungan </label>
  				<div class="col-sm-8">
  					<input type="date" name="tgl_kunjung" id="tgl_kunjung" class="form-control">
  				</div>
  			</div>

  			<div class="form-group">
  				<label for="tgl_kunjung" class="control-label col-sm-3"> Jam Kunjungan </label>
  				<div class="col-sm-8">
  					<input type="time" name="jam_kunjung" id="jam_kunjung" class="form-control">
  				</div>
  			</div>

  			<div class="form-group">
  				<label for="btn" class="control-label col-sm-3"></label>
  				<div class="col-sm-8">
  					<div class="col-sm-4">
  						<input type="submit" id="submit" name="daftar" class="btn btn-danger btn-block" value="Tambah" />
  					</div>
  					<div class="col-sm-4">
  						<input type="reset" id="reset" class="btn btn-danger btn-block" value="Batal" />
  					</div>
  				</div>
  			</div>
  		</div>
  	</form>

  	<?php
  	$kode_pasien = @$_POST['kode_pasien'];
	$nama_pasien = @$_POST['nama_pasien'];
	$nama_dokter = @$_POST['nama_dokter'];
	$tgl_kunjung = @$_POST['tgl_kunjung'];
	$jam_kunjung = @$_POST['jam_kunjung'];

	$dd=mysql_query("select*from tbl_dokter where nama_dokter='$nama_dokter'");

	$registrasi_online = @$_POST['daftar'];

	if($registrasi_online) {
		if($kode_pasien == "" || $nama_pasien == "" || $nama_dokter == "" || $tgl_kunjung == "" || $jam_kunjung == "" ){

			?>
			<script type="text/javascript">
				alert("Inputan tidak boleh kosong !");
			</script>
			<?php

		} else {
			mysql_query("insert into tbl_registrasi values('$kode_pasien', '$nama_pasien', '$nama_dokter', '$tgl_kunjung', '$jam_kunjung')") or die (mysql_error());
			?>
			<script type="text/javascript">
				alert("Registrasi Berhasil !");
				window.location.href="pages/reg_berhasil.php";
			</script>
			<?php
		}
	}
	?>
	<script type="text/javascript">
  			a
  			</script>
  			<script type="text/javascript">
  				<?php echo $jsArray; ?>
  				function changeValue(id){
  					document.getElementById('nama_pasien').value = prdName[id].nama_pasien;
  				};
  			</script>
  		</div>
  	</div>
  </div>
</div>