<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="d-flex justify-content-between my-lg-3">
            <div class="d-flex">
                <h3>Petugas Access Menu</h3>
            </div>
            <div class="d-flex">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="bi bi-plus-lg"></i></button>
            </div>
        </div>
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Url</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($accessmenu as $ac) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $ac['url'] ?></td>
                        <td>
                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#update<?= $ac['id'] ?>"><i class="bi bi-pencil-square"></i></button>
                            <a href="/admin/delete_access_menu/<?= $ac['id'] ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
        <p>Note : Ini adalah menu untuk administrasi acccess petugas bukan admin</p>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Access baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/tambah_access_menu" method="post">
            <div class="form-group">
                <label for="#url">URL</label>
                <input type="text" name="url" id="url" class="form-control" placeholder="Masukan Url yang diizinkan untuk diakses">
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="d-flex">
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php foreach($accessmenu as $ac) : ?>
    <div class="modal fade" id="update<?= $ac['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="/admin/update_access_menu/<?= $ac['id'] ?>" method="post">
            <div class="form-group">
                <label for="#url">URL</label>
                <input type="text" name="url" value="<?= $ac['url'] ?>" id="url" class="form-control" placeholder="Masukan Url yang diizinkan untuk diakses">
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="d-flex">
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<script>
$(document).ready(function() {
    let table = new DataTable('#myTable')
    $('#myTable_wrapper').addClass("pt-5 pb-5")
})
</script>
<?= $this->endSection() ?>