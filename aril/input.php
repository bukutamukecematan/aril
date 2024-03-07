<?php

include "koneksi.php";

$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$nik=$_POST['nik'];
$umur=$_POST['umur'];
$keperluan=$_POST['keperluan'];



$input=$koneksi -> query ("insert into bukutamu_aril (tanggal,nama,jk,alamat,nik,umur,keperluan) values  ('$tanggal','$nama','$jk','$alamat','$nik','$umur','$keperluan' )");
if ($input) {
?>
<script>
    alert("data berhasil ditambahkan");
    document.location="tampil.php";
</script>

<?php
}else{

}


