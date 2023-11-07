<?= $this->extend('layout/masyarakat'); ?>

<?= $this->section('content'); ?>

<section id="hero">

<div class="container" >
<table class="table" id="productTable">
    <thead>
      <tr>
        <th></th>
        <th>Id Pengaduan</th>
        <th>Username</th>
        <th>Tanggal Pengaduan</th>
        <th>Isi Pengaduan</th>
        <th>Foto Pengaduan</th>
        <th>Status Pengaduan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($pengaduan as $p) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $p['id_pengaduan']; ?></td>
          <td><?= $p['nik']; ?></td>
          <td><?= $p['tanggal']; ?></td>
          <td><?= $p['nominal']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</section>

<?= $this->endSection(); ?>