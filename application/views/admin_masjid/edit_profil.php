<div class="page-wrapper">
    <div class="container-fluid">
        <br>
        <h3><i class="fa fa-edit mb-3"></i> Edit Data Admin Masjid</h3>

        <!--?php foreach () :  ?-->

        <form method="POST" action="<?= base_url() . 'admin_masjid/edit_profil_admin/index' ?>">
            <div class="for-group mb-2">
                <!-- <input type="text" name="id_admin_masjid" class="id_admin_masjid" value="<?= $m->id_masjid ?>" hidden=""> -->
            </div>
            <div class="for-group mb-2">
                <label>Nama Lengkap</label>
                <!-- <input type="text" name="nama_lengkap" class="form-control" value="<?= $m->nama_masjid ?>"> -->
            </div>
            <div class="for-group mb-2">
                <label>Email</label>
                <!-- <input type="text" name="email" class="form-control" value="<?= $m->alamat ?>"> -->
            </div>
            <div class="for-group mb-2">
                <label>Username</label>
                <!-- <input type="text" name="username" class="form-control" value="<?= $m->deskripsi_masjid ?>"> -->
            </div>
            <div class="for-group mb-2">
                <label>No. Telepon</label>
                <!-- <input type="text" name="no_telp" class="form-control" value="<?= $m->latitude ?>"> -->
            </div>
            <br>
            <a href='<?= base_url('admin_masjid/dashboard') ?>' type="button" class="btn btn-danger">Close</a>
            <button type="submit" class="btn btn-primary ">Save changes</button>
        </form>

        <!--?php endforeach; ?-->

    </div>
</div>