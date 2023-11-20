<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <h3 class="my-2">Generate Laporan Pengaduan PDF</h3>
        <form action="/admin/BuatLaporan/" method="post" class="mt-3">
            <div class="input-group">
                <input type="date" name="tanggal" id="" class="form-control">
            </div>
            <div class="input-group mt-3">
                <select name="format" id="" class="form-control">
                    <option value="Harian">Harian</option>
                    <option value="Mingguan">Mingguan</option>
                    <option value="Bulanan">Bulanan</option>
                    <option value="Tahunan">Tahunan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>