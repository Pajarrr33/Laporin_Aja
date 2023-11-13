<?= $this->extend('templates') ?>

<?= $this->section('content') ?>
<section class="background-section" style="background-image: url(assets/img/breadcrumb.jpg);">
    <div class="container">
        <nav aria-label="breadcrumb" class="my-custom-breadcrumb">
            <ol class="breadcrumb mt-lg-5 pt-lg-2">
                <li class="breadcrumb-item"><a href="#"><b style="color: white;">Home</b></a></li>
                <li class="breadcrumb-item"><a href="#"><b style="color: white;">Laporan</b></a></li>
            </ol>
        </nav>
    </div>
</section>

<div class="container my-5">
    <form action="/tulis_pengaduan" method="post" enctype="multipart/form-data">
        <?php csrf_field(); ?>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukan Judul laporan anda">
        </div>
		<div class="form-group">
            <label>Gambar</label> 
			<input type="file" name="img" id="" class="form-control">
        </div>
        <div class="form-group">
            <label>Isi</label>
			<textarea name="isi" id="isi" cols="30" rows="10" class="form-control" placeholder="Masukan deskripsi laporan anda"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#isi' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<?= $this->endSection() ?>