<?= $this->extend('layout/masyarakat'); ?>

<?= $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<section id="hero">

  <div class="row mt-5">
    <div class="col-md-10 offset-md-1">
      <form action="/pembayaran/save" method="POST" enctype='multipart/form-data'>
        <?php csrf_field(); ?>
        <div>
          <?php if ($pesan) { ?>
            <p style="color:green"><?php echo $pesan ?></p>
          <?php } ?>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="productName"><i class="bi bi-bag"></i></span>
          <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" aria-label="Nama Siswa" aria-describedby="Name" required="true">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="productPrice"><i class="bi bi-cash"></i></span>
          <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" aria-label="Keterangan" aria-describedby="Description" required="true">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="productPrice"><i class="bi bi-cash"></i></span>
          <input type="datetime-local" name="tanggal" class="form-control" placeholder="Tanggal" aria-label="Tanggal" aria-describedby="Description" required="true">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="productStock"><i class="bi bi-list-ol"></i></span>
          <input type="number" name="nominal" class="form-control" placeholder="Nominal" aria-label="Nominal" aria-describedby="Description" required="true">
        </div>
        <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

</section>

<?= $this->endSection(); ?>