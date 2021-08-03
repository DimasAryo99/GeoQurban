<div class="page-wrapper">
    <div class="container-fluid">
        <br>
        <h3><i class="fa fa-edit mb-3"></i> Edit Data Hewan</h3>

        <?php foreach ($hewan_masjid as $h) :  ?>

        <form method="POST" action="<?= base_url('admin_masjid/datwan_admin/update_hewan_filter') ?>">
        <div class="for-group mb-2">
                <label>Jumlah Hewan</label>
                <input type="text" name="jumlah_hewan" class="form-control" value="<?= $h->jumlah_hewan?>">
            </div>
            <div class="for-group mb-2">
                <!-- <label>id Hewan</label> -->
                <input type="text" name="id_hewan_masjid" class="form-control" value="<?= $h->id_hewan_masjid?>" hidden="">
            </div>
            <!-- <div class="for-group mb-2">
                <label>Jumlah Hewan</label>
                <input type="text" name="" class="form-control" value="">
            </div>
            <div class="for-group mb-2">
                <label>Foto</label>
                <input type="file" name="" class="form-control" value="">
            </div> -->
            <br>
            <a href='<?= base_url('admin_masjid/datwan_admin/index') ?>'>
                    <div type="button" class="btn btn-danger">Close </div>
                </a>
            <button type="submit" class="btn btn-primary ">Save changes</button>
        </form>

        <?php endforeach; ?>
    </div>
</div>