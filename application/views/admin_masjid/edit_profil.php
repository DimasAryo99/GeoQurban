<div class="page-wrapper">
    <div class="container-fluid">
        <br>
        <h3><i class="fa fa-edit mb-3"></i> Edit Data Admin Masjid</h3>


        <form method="POST" action="<?= base_url('admin_masjid/dashboard/update_profil')?>">
            <div class="for-group mb-2">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?= $m['email']?>"> 
            </div>
            <div class="for-group mb-2">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="<?= $m['nama_admin'] ?>"> 
            </div>
            <div class="for-group mb-2">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?= $m['username']?>"> 
            </div>
            <div class="for-group mb-2">
                <label>No. Telepon</label>
                <input type="text" name="no_telp" class="form-control" value="<?= $m['no_telp']?>"> 
            </div>
            <br>
            <a href='<?= base_url('admin_masjid/dashboard') ?>' type="button" class="btn btn-danger">Close</a>
            <button type="submit" class="btn btn-primary ">Save changes</button>
        </form>

    </div>
</div>