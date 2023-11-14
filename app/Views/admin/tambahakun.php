
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data Petugas</h1>
            <!-- form ganti Password -->
            <div class="card mb-4">
                <div class="card-body">
                    <?php if (session()->getFlashdata('vall')) : ?>
                        <?= session()->getFlashdata('vall'); ?>
                    <?php endif; ?>
                    <form action="/admin/savePetugas" method="post" enctype="multipart/form-data">

                        <div class="mb-1">
                            <label for="nama_petugas" class="form-label">Nama Petugas <font color="FF7F7F">*</font></label>
                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
                        </div>

                        <div class="mb-1">
                            <label for="username" class="form-label">Username <font color="FF7F7F">*</font></label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>

                        <div class="mb-1">
                            <label for="email" class="form-label">Email <font color="FF7F7F">*</font></label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-1">
                            <label for="password" class="form-label">Password <font color="FF7F7F">*</font></label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="mb-1">
                            <label for="confirm" class="form-label">Confirm <font color="FF7F7F">*</font></label>
                            <input type="password" class="form-control" id="confirm" name="confirm">
                        </div>

                        <div class="mb-1">
                            <label for="telepon" class="form-label">Telepon <font color="FF7F7F">*</font></label>
                            <input type="text" class="form-control" id="telepon" name="telepon">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Level <font color="FF7F7F">*</font></label>
                            <select class="form-select" name="level" aria-label="Default select example">
                                <option value="petugas" selected>Petugas</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <button type="submit" class="me-1 btn btn-primary">Simpan Perubahan</button>
                        <div class="text-end"><small>
                                <font color="FF7F7F">*</font> required fields
                            </small>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>