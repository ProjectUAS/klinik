<?php
$no_registrasi = mysql_fatch_array(mysql_query("select * min("no_rm") as no_reg from tbl_registrasi"));
?>

<?php
if(isset($_POST['cari_laporan'])){
	$no_rm = $_POST['no_rm'];
	if(empty($no_rm)){
		$query = mysql_query("select * from no_rm");
	} else {
		?>
		<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-header"><i><b>No Rekam Medis</b></i>
					
				</div>
			</div>
		</div>
	</div>
</div>
	}
}

