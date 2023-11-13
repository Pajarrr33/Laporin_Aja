<?= $this->extend('layout/masyarakat'); ?>

<?= $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<section id="hero">

  <div class="row mt-5">
    <div class="col-md-10 offset-md-1">
      <form action="/pengaduan/save" method="POST" enctype='multipart/form-data'>
      <div class="mb-1"><label for="name" class="form-label form-label">Isi Laporan<font color="FF7F7F">*</font></label><input name="isi_pengaduan" placeholder="Laporan Anda" type="text" class="form-control"></div>
                                <!-- upload foto -->
                                <div class="mb-1"><label for="name" class="form-label form-label">Foto<font color="FF7F7F">*</font></label><input name="foto" placeholder="Laporan Anda" type="file" class="form-control"></div>
                                <button type="submit" class="me-1 btn btn-primary">Submit</button>
                                <div class="text-end"><small>
                                        <font color="FF7F7F">*</font> required fields
                                    </small></div>
      </form>
    </div>
  </div>

</section>

<?= $this->endSection(); ?>