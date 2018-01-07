<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">

			<?php
			$kdjadwal = @$_GET['kode_jadwal'];
			$sql = mysql_query("select * from tbl_jadwal where kode_jadwal = '$kdjadwal' ") or die (mysql_error());
			$data = mysql_fetch_array($sql);
			?>

			<div class="page-header"><h3 align="center"> Edit Data Jadwal Dokter</h3>
			</div>
			<form class="form-horizontal" action="" method="POST" role="form">
				<div class="form-group">
					<label for="kode_jadwal" class="control-label col-sm-3">Kode Jadwal</label>
					<div class="col-sm-8">
						<input type="text" name="kode_jadwal" id="kode_jadwal" value="<?php echo $data['kode_jadwal']; ?>" class="form-control" disabled="disabled">
					</div>
				</div>

				<?php
			mysql_connect("localhost","root","");
			mysql_select_db("db_web");
			$result = mysql_query("select * from tbl_dokter");
			$jsArray = "var prdName = new Array();\n";

			echo '<form class="form-horizontal" action="?page=registrasi" method="post" role="form">';
			echo '<div class="form-group">';
			echo '<label for="kode_dokter" class="control-label col-sm-3"> Kode Dokter</label>';
			echo '<div class="col-sm-8">';
			echo '<select class="form-control" name="kode_dokter" id="kode_dokter" onchange="changeValue(this.value)">';
			echo '<option>-- Pilih Kode Dokter --</option>';
			while ($row = mysql_fetch_array($result)) {
				echo '<option value="' . $row['kode_dokter'] . '">' . $row['kode_dokter'] . '</option>';
				$jsArray .= "prdName['" . $row['kode_dokter'] . "'] = {nama_dokter:'".addslashes($row['nama_dokter'])."'};\n";
			}
			echo '</select>';
			echo '</div>';
			?>

			<div class="form-group">
				<label for="nama_dokter" class="control-label col-sm-3"> Nama Dokter </label>
				<div class="col-sm-8">
					<input type="text" name="nama_dokter" id="nama_dokter" class="form-control">
				</div>
  			</div>

				<div class="form-group">
					<label for="waktu" class="control-label col-sm-3"> Jam/Hari</label>
					<div class="col-sm-8">
						<input type="text" name="waktu" id="waktu" class="form-control" value="<?php echo $data['waktu']?>" />
					</div>
				</div>

				<div class="form-group">
					<label for="btn" class="control-label col-sm-3"></label>
					<div class="col-sm-8">
						<div class="col-sm-4">
							<input type="submit" id="submit" name="edit_jadwal" class="btn btn-danger btn-block" value="Edit" />
						</div>

						<div class="col-sm-4">
							<input type="reset" id="reset" class="btn btn-danger btn-block" value="Batal" />
						</div>
					</div>
				</div>
			</form>

			<?php
			$kode_dokter = @$_POST['kode_dokter'];
			$nama_dokter = @$_POST['nama_dokter'];
			$waktu = @$_POST['waktu'];

			$edit_jadwal = @$_POST['edit_jadwal'];

			if($edit_jadwal){
         if($kode_dokter == "" || $nama_dokter == "" || $waktu == "") {
             ?>
             <script type="text/javascript">
             alert("Inputan tidak boleh ada yang kosong");
             </script>
             <?php
         } else {
             mysql_query("update tbl_jadwal set kode_dokter= '$kode_dokter', nama_dokter = '$nama_dokter', waktu = '$waktu' where kode_jadwal = '$kdjadwal'") or die (mysql_error());
             ?>
             <script type="text/javascript">
             alert("Data pasien berhasil diedit");
             window.location.href="?page=dokter&action=data_jadwal";
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
  					document.getElementById('nama_dokter').value = prdName[id].nama_dokter;
  				};
  			</script>


		</div>
	</div>
</div>