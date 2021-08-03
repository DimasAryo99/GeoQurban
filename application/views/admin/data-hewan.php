        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Data Hewan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Hewan</li>
                </ol>
            </div>
            <!--div class="col-md-7 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/materialpro/"
                            class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Upgrade to
                            Pro</a>
                            <<<<<<< HEAD
                    </!--div-->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
            <div class="col-lg-">

                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-database" aria-hidden="true"></i> Data Hewan</h4>
                        <h4 class="card-title"><i class="fa fa-database" aria-hidden="true"></i> Data Lokasi</h4>
                        <hr size="12px">
                        <!--i class="fa fa-plus fa-sm"></!--i-->
                        <?php if ($hewan != null) { ?>
                            <button type="button" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#tambah_hewan">

                                Tambah Hewan
                            </button>

                        <?php } else { ?>
                            <!-- <button type="button" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#tambah_hewan">
                                Tambah Hewan
                            </button> -->
                        <?php } ?>
                        <!-- <div class="table-responsive"> -->
                        <h4 class="card-title"><i class="fa fa-filter"></i> Filter</h4>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lokasi Masjid
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php
                                foreach ($masjid as $key) { ?>

                                    <a class='dropdown-item' href='<?php echo base_url('admin/data_hewan/filter_masjid/' . $key->id_masjid) ?>'><?= $key->nama_masjid ?></a>

                                <?php   }
                                ?>
                                <!-- <a class="dropdown-item" href="https://www.malasngoding.com/category/html">HTML</a>
		<a class="dropdown-item" href="https://www.malasngoding.com/category/bootstrap-4">Bootstrap 4</a>
		<a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter">CodeIgniter</a> -->
                            </div>

                        </div>
                        <!--div-- class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Tahun
                                 </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <a class="dropdown-item" href="#">2020</a>
                                     <a class="dropdown-item" href="#">2019</a>
                                     <a class="dropdown-item" href="#">2018</a>
                                 </div>
                             </div-->
                        <?php
                        if ($hewan != null) {
                        ?>
                        <div class="col-lg-m3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Hewan</th>
                                        <!-- <th>Jumlah Hewan</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $no = 0;
                                    foreach ($hewan as $hewans) {

                                        $no++;
                                    ?>

                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $hewans->jenis_hewan ?></td>
                                            <!-- <td>18 ekor</td>   -->
                                            <td width="150px">
                                                <a href="<?php echo site_url('admin/data_hewan/tampilan_edit_hewan/' . $hewans->id_hewan) ?>" class="btn btn-primary btn-sm mb-2"><i class="fa fa-edit"></i></a>
                                                <a onclick="deleteConfirm('<?php echo site_url('admin/data_hewan/delete/' . $hewans->id_hewan) ?>')" href="#!" class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tr>
                                    <td>
                                        <select name="" id="angkatan">
                                            <option value="0">Show All</option>
                                            <option value="0">Show All</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        <?php
                        } else {
                        ?>
                            <table class="table">
                        </div>
                        <br>
                        <div class="table-responsive w-auto">
                            <table class="table" id="hewan">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Hewan</th>
                                        <th>Jumlah Hewan</th>
                                        <th>Action</th>
                                        <th>Nama Masjid</th>
                                        <th>Alamat Masjid</th>
                                        <th>Latitude & Longitude</th>
                                        <th>No.Tlp</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $no = 0;
                                    // echo $id_masjid;
                                    foreach ($coba as $masjid_hewan) {

                                        $no++;
                                    ?>

                                    <?php $i = 1; ?>
                                    <?php foreach ($masjid as $m) :  ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $masjid_hewan->jenis_hewan ?></td>
                                            <td><?php echo $masjid_hewan->jumlah_hewan ?></td>
                                            <td width="150px">
                                            <a href="<?php echo site_url('admin/data_hewan/tampilan_edit_hewan_masjid/' . $masjid_hewan->id_hewan_masjid) ?>"
											 class="btn btn-primary btn-sm mb-2" ><i class="fa fa-edit"></i></a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/data_hewan/delete_filter/' . $masjid_hewan->id_hewan_masjid) ?>')"
											 href="#!" class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash"></i></a>
                                         </td>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $m->nama_masjid ?></td>
                                            <td><?= $m->alamat ?></td>
                                            <td width="100px"><?= $m->latitude ?>,
                                                <?= $m->longitude ?></td>
                                            <td><?= $m->no_telp ?></td>
                                        </tr>
                                    <?php } ?>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<!-- Modal -->
<div class="modal fade" id="tambah_hewan" tabindex="-1" role="dia   g" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content" style="width: 35rem;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hewan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                if ($hewan != null) {
                ?>
                    <!-- Form -->
                    <form action="<?= base_url('admin/data_hewan/tambahhewan')  ?>" method="post" enctype="multipart/form-data">

                        <div class="for-group">
                            <label>Jenis Hewan</label>
                            <input type="text" name="jenis_hewan" class="form-control">
                        </div>
                        <br>
                        <!-- <div class="for-group">
                            <label> Foto Hewan Qurban</label><br>
                            <input type="file" name="foto" class="form-control">
                        </div> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>
        <?php
                } else {
                    </div>

        ?>
            <!-- Form -->
            <form action="<?= base_url('admin/data_hewan/tambahhewan_filter/'.$id_masjid)  ?>" method="post" enctype="multipart/form-data">
                <div class="for-group">
                    <label>Jenis Hewan</label>
                    <select required name="jenis_hewan" class="form-control">
                        <option value="">-- Pilih Jenis Hewan --</option>
                        <?php
                        foreach ($hewan_filt as $row) {
                            echo "<option value='" . $row->id_hewan. "'>" . $row->jenis_hewan . "</option>";
                        }
                        echo "
		                </select>"
                        ?>
                </div>
                <br>
                <div class="for-group">
                    <label>Jumlah Hewan</label>
                    <input type="text" name="jumlah_hewan" class="form-control">
                </div>

                <br>
                <!-- <div class="for-group">
                            <label> Foto Hewan Qurban</label><br>
                            <input type="file" name="foto" class="form-control">
                        </div> -->

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

        </form>
    <?php
                }
    ?>


    </div>

</div>
</div>
<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <br>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

    </script> 