<?php
$kdjadwal =@$_GET['kdjadwal'];

mysql_query("delete from tbl_jadwal where kode_jadwal = '$kdjadwal'")
?>

<script type="text/javascript">
window.location.href="?page=dokter&action=data_jadwal";
</script>