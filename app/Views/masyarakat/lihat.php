<?= $this->extend('layout/masyarakat'); ?>

<?= $this->section('content'); ?>

<section id="hero">

<div class="container" >
<table class="table" id="productTable">
    <thead>
      <tr>
        <th></th>
        <th>Nama Siswa</th>
        <th>Keterangan</th>
        <th>Tanggal</th>
        <th>Nominal</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($pembayaran as $p) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $p['nama_siswa']; ?></td>
          <td><?= $p['keterangan']; ?></td>
          <td><?= $p['tanggal']; ?></td>
          <td><?= $p['nominal']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</section>

<?= $this->endSection(); ?>