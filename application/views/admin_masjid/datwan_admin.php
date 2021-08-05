<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
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
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-database" aria-hidden="true"></i> Data Masjid</h4>
                    </div>
                        <table class="table">
                        <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Masjid</th>
                                        <th>Alamat Masjid</th>
                                        <th>Latitude, Longitude</th>
                                        <th>No.Tlp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($masjid as $m) :  ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $m->nama_masjid ?></td>
                                            <td><?= $m->alamat ?></td>
                                            <td width="100px"><?= $m->latitude ?>,
                                                <?= $m->longitude ?></td>
                                            <td><?= $m->no_telp ?></td>
                                            <td width="150px"><?php echo anchor('admin_masjid/datmas_admin/editmasjid/' . $m->id_masjid, '<div class="btn btn-primary btn-sm mb-2"><i class="fa fa-edit"></i></div>') ?>
                                                <?php echo anchor('admin_masjid/datmas_admin/hapusmasjid/' . $m->id_masjid, '<div class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash"></i></div>') ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                        </table>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-database" aria-hidden="true"></i> Data Hewan</h4>
                        <hr size="12px">
                        <!--i class="fa fa-plus fa-sm"></!--i-->
                        <button type="button" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#tambah_hewan">
                            Tambah Hewan
                        </button>
                        <div class="table-responsive">
                            <!-- <h4 class="card-title" ><i class="fa fa-filter"></i> Filter</h4>
                        <style>
                           .scroll{
                           height: 300px;
                           width: 300px;
                           overflow: scroll;
                           }
                        </style>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                        Lokasi Masjid
	                        </button>
	                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="scroll">
                                    <?php
                                    foreach ($masjid as $key) { ?>
                                            <a class='dropdown-item' href='<?php echo base_url('admin_masjid/datwan_admin/filter_masjid/' . $key->id_masjid) ?>'><?= $key->nama_masjid ?></a>
                                    <?php       }
                                    ?>
                                </div>                                               
		                            <!-- <a class="dropdown-item" href="https://www.malasngoding.com/category/html">HTML</a>
		                            <a class="dropdown-item" href="https://www.malasngoding.com/category/bootstrap-4">Bootstrap 4</a>
		                            <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter">CodeIgniter</a> -->
                        </div>
                        <!-- </div> -->

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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Hewan</th>
                                <th>Jumlah Hewan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($hewan_by_admin as $masjid_hewan) {
                                $no++;
                            ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $masjid_hewan->jenis_hewan ?></td>
                                    <td><?php echo $masjid_hewan->jumlah_hewan ?></td>
                                    <td width="150px">
                                        <a href="<?php echo site_url('admin_masjid/datwan_admin/tampilan_edit_hewan_masjid/' . $masjid_hewan->id_hewan_masjid) ?>" class="btn btn-primary btn-sm mb-2"><i class="fa fa-edit"></i></a>
                                        <a onclick="deleteConfirm('<?php echo site_url('admin_masjid/datwan_admin/delete/' . $masjid_hewan->id_hewan_masjid ) ?>')" href="#!" class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
                <!-- Form -->
                <form action="<?= base_url('admin_masjid/datwan_admin/tambahhewan')  ?>" method="post" enctype="multipart/form-data">
                    <!-- <div class="for-group">
                            <label>Lokasi Masjid</label>
                            <select name="jenis_hewan" class="form-control">
                                <div class="scroll">
                                    <?php
                                    foreach ($masjid as $key) { ?>
                                            <option value="islam">
                                                <a class='dropdown-item' href='<?php echo base_url('admin_masjid/datwan_admin/filter_masjid/' . $key->id_masjid) ?>'><?= $key->nama_masjid ?></a>
                                            </option>
                                    <?php   }
                                    ?>
                                </div>
                            </select>
                        </div> -->
                    <br>
                    <div class="for-group">
                        <label>Jenis Hewan</label>
                        <select required name="jenis_hewan" class="form-control">
                            <option value="">-- Pilih Jenis Hewan --</option>
                            <?php
                            foreach ($hewan as $row) {
                                echo "<option value='" . $row->id_hewan . "'>" . $row->jenis_hewan . "</option>";
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
    </div>
</div>
