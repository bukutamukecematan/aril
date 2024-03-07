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
 
include "boot.php";?>
<body>
    <!-- bagian form  -->
    <div class="container mt-2">
        <div class="row">
            <div class="col col-5">
          
  <form action="input.php" method="post">
    <h3>ISI DATA</h3>
    <form>
  <div class="mb-3">
  <label for="tanggal" class="form-label">Tanggal</label>
  <input readonly type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
</div>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nama" required>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
    <select class="form-select" aria-label="Default select example" name="jk" required>
      <option value="Laki Laki">Laki Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NIK</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="nik" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Umur</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="umur" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Keperluan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="keperluan" required>
  </div>
  <button  type="submit" class="btn bg-info">Simpan</button>
</form>
</div>
</div>
<!-- tutup form  -->
<!-- ini bagian tampil  -->
<br>
<!-- tutup tampil -->
  </body>

  <?php 

