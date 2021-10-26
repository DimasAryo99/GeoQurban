<div class="page-wrapper">
    <div class="container-fluid">
        <br>
        <h3><i class="fa fa-edit mb-3"></i> Edit Data Hewan</h3>

        <?php foreach ($hewan as $h) :  ?>

        <form method="POST" action="<?= base_url('admin/jenis_hewan/update_hewan') ?>">
        <div class="for-group mb-2">
                <label>Jenis Hewan</label>
                <input type="text" name="jenis_hewan" class="form-control" value="<?= $h->jenis_hewan?>">
            </div>
            <div class="for-group mb-2">
                <!-- <label>id Hewan</label> -->
                <input type="text" name="id_hewan" class="form-control" value="<?= $h->id_hewan?>" hidden="">
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
            <a href='<?= base_url('admin/jenis_hewan/index') ?>'>
                    <div type="button" class="btn btn-danger">Close </div>
                </a>
            <button type="submit" class="btn btn-primary ">Save changes</button>
        </form>

        <?php endforeach; ?>
    </div>
</div>