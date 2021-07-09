<div class="page-wrapper">
    <div class="container-fluid">
        <br>
        <h3><i class="fa fa-edit mb-3"></i> Edit Data Masjid</h3>

        <?php foreach ($masjid as $m) :  ?>

        <form method="POST" action="<?= base_url() . 'admin/data_lokasi/updatelokasi' ?>">
            <div class="for-group mb-2">
                <input type="text" name="id_masjid" class="id_masjid" value="<?= $m->id_masjid ?>" hidden="">
            </div>
            <div class="for-group mb-2">
                <label>Nama Masjid</label>
                <input type="text" name="nama_masjid" class="form-control" value="<?= $m->nama_masjid ?>">
            </div>
            <div class="for-group mb-2">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" rows="3" value="<?= $m->alamat ?>">
            </div>
            <div class="for-group mb-2">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?= $m->deskripsi_masjid ?>">
            </div>
            <div class="for-group mb-2">
                <label>Latitide</label>
                <input type="text" name="latitude" class="form-control" value="<?= $m->latitude ?>">
            </div>
            <div class="for-group mb-2">
                <label>Longitude</label>
                <input type="text" name="longitude" class="form-control" value="<?= $m->longitude ?>">
            </div>
            <div class="for-group mb-2">
                <label>No. Telepon</label>
                <input type="text" name="no_telp" class="form-control" value="<?= $m->no_telp ?>">
            </div>
            <br>
            <button href='' type="button" class="btn btn-danger">Tutup</button>
            <button type="submit" class="btn btn-primary ">Simpan</button>
        </form>

        <?php endforeach; ?>

    </div>
</div>