<?php
session_start();
$user=$_SESSION['username'];
if ($user==""){
  ?>
<script>
  document.location='index.php';
  </script>
  <?php
}else{

}

include "boot.php";


?>

<br>


<table class="table">
  <thead class="table-secondary ">
  <tr>
        <th>no</th>
        <th>tanggal</th>
        <th>nama</th>
        <th>jk</th>
        <th>alamat</th>
        <th>nik</th>
        <th>umur</th>
        <th>keperluan</th>
        <th>waktu</th>
        <th>aksi</th>
  </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    $tampil=$koneksi->query("select * from bukutamu_aril ORDER BY tanggal desc");
    while($t=$tampil -> fetch_array()){
        @$no++;
    ?>

    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $t['tanggal'] ?></td>
        <td><?php echo $t['nama'] ?></td>
        <td><?php echo $t['jk'] ?></td>
        <td><?php echo $t['alamat'] ?></td>
        <td><?php echo $t['nik'] ?></td>
        <td><?php echo $t['umur'] ?></td>
        <td><?php echo $t['keperluan']?></td>
        <td><?php echo $t['waktu']?></td>
        <td><a href="hapus.php?id=<?php echo $t['no'] ?>" onclick="return confirm('APAKAH ANDA MAU MENGHAPUS')" ><button class="btn bg-danger btn btn-sm text-light"><i class="bi bi-trash-fill"></i></button></a>
        <a href="update.php?id=<?php echo $t['no'] ?>" onclick="return confirm('APAKAH ANDA INGIN MENGEDIT')" ><button class="btn bg-info btn btn-sm text-light"><i class="bi bi-pencil"></i></button></a></td>
    </tr>
    <?php
    }

    ?>

  </tbody>
</table>

<?php 

