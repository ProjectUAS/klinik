<div class="container-fluid">
        <div class="row">
            <div>
              <!--Tampil Jadwal Dokter-->
              <h3>Jadwal Dokter Klinik Utama Waluya</h3>
              <!--End Tampil Jadwal Dokter-->
            </div>

        </div>

        <div class="row">
    <div class="col-md-12 col-xs-12">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <th>No.</th>
          <th>Nama Dokter</th>
          <th>Jam/Hari</th>
        </thead>
        <tbody>
          <?php
        $no = 1;

        $batas = 3;
        $hal = @$_GET['hal'];
        if(empty($hal)){
          $posisi = 0;
          $hal = 1;
        } else {
          $posisi = ($hal - 1) * $batas;
        }

        $sql = mysql_query("select * from tbl_jadwal LIMIT $posisi, $batas") or die (mysql_error());
        $no = $posisi + 1;

        $cek = mysql_num_rows($sql);
        if($cek < 1){
          ?>
          <tr>
            <td colspan="10" align="center" style="padding: 10px;">Data tidak ditemukan.</td>
          </tr>
          <?php

        } else {

        while ($data = mysql_fetch_array($sql)){
        ?>

        <tr>
          <td align="center"><?php echo $no++."."; ?></td>
          <td align="center"><?php echo $data['nama_dokter']; ?></td>
          <td align="center"><?php echo $data['waktu']; ?></td>
        </tr>
        <?php
      }
    }
    ?>
        </tbody>
        
      </table>
            
      </div>
    </div>
