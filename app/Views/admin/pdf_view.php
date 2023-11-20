<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporin Aja</title>
</head>
<style>
@page {
    margin: 0px;
}

body {
    margin: 0px;
}

.page-break {
    page-break-after: always;
}


table {
    page-break-inside: auto;
    /* Avoid breaking the table inside pages */
}

tbody tr {
    page-break-inside: avoid;
    /* Avoid breaking table rows inside pages */
}
</style>

<body>
    <div class="letterhead">
        <h1 style="text-align:center;">Laporin Aja</h1>
    </div>

    <div class="title"
        style="text-align: left; margin-left: 20px; font-family: 'Inter', sans-serif; margin-bottom: 20px;">
        <p style="font-weight: bold; font-size: 24px;">Laporan Aduan <?= $format ?> </p>
        <?php if($tanggal_mulai == null) : ?>
        <p style="font-weight: bold; font-size: 24px;">Tanggal : <?= $tanggal_berakhir ?> </p>
        <?php elseif($tanggal_mulai != null) : ?>
            <p style="font-weight: bold; font-size: 24px;">Tanggal : <?= $tanggal_mulai ?> - <?= $tanggal_berakhir ?></p>
        <?php endif ; ?>
    </div>

    <div class="table-container" style="margin: 20px;">
        <!-- Adjust margin as needed -->
        <table style="font-family: 'Inter', sans-serif; width: 100%; border-collapse: collapse;">
            <thead style="background-color: black; color: white;">
                <tr>
                    <th style="padding: 10px;">No</th>
                    <th style="padding: 10px;">Judul</th>
                    <th style="padding: 10px;">Isi</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Tanggal Diajukan</th>
                    <th style="padding: 10px;">Tanggal Selesai</th>
                </tr>
            </thead>
            <tbody style="background-color: white; color: black;">
                <?php $no = 1; foreach($pengaduan as $p) : ?>
                <tr style="<?php if($no % 2 == 0) echo 'background-color: black; color: white;' ; ?>">
                    <td style="padding: 10px;"><?= $no++ ?></td>
                    <td style="padding: 10px;"><?= $p['judul'] ?></td>
                    <td style="padding: 10px;"><?= $p['isi'] ?></td>
                    <td style="padding: 10px;"><?= $p['status'] ?></td>
                    <td style="padding: 10px;"><?= $p['tanggal'] ?></td>
                    <td style="padding: 10px;">
                        <?= $p['tanggal_selesai'] ?>
                    </td>
                </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
    </div>
</body>

</html>