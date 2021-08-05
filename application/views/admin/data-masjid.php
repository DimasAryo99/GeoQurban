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
                <h3 class="text-themecolor m-b-0 m-t-0">Data Masjid</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard_admin')?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Masjid</li>
                </ol>
            </div>
            <!--div class="col-md-7 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/materialpro/"
                            class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Upgrade to
                            Pro</a>
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
            <div class="col-lg-">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-database" aria-hidden="true"></i> Data Masjid</h4>
                        <br>
                        <div class="table-responsive w-auto">
                            <table id="example"class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Masjid</th>
                                        <th>Alamat Masjid</th>
                                        <th>Latitude & Longitude</th>
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
                                            <td width="150px"><?php echo anchor('admin/data_lokasi/editlokasi/' . $m->id_masjid, '<div class="btn btn-primary btn-sm mb-2"><i class="fa fa-edit"></i></div>') ?>
                                                <?php echo anchor('admin/data_lokasi/hapuslokasi/' . $m->id_masjid, '<div class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash"></i></div>') ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    <!-- Modal -->
    <div class="modal fade" id="tambah_lokasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 35rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Lokasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form action="<?= base_url('admin/data_lokasi/tambahlokasi')  ?>" method="post" enctype="multipart/form-data">
                        <div class="for-group">
                            <label>Nama Masjid</label>
                            <input type="text" name="nama_masjid" class="form-control">
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Alamat</label>
                            <textarea type="text" name="alamat" class="form-control" rows="2"></textarea>
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" rows="3"></textarea>
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Latitude</label>
                            <input type="text" name="latitude" class="form-control" placeholder="ex:-6.300641"></input>
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Longitude</label>
                            <input type="text" name="longitude" class="form-control" placeholder="ex:106.814095">
                        </div>
                        <br>
                        <div class="for-group">
                            <label>No.Telpon</label>
                            <input type="text" name="no_telp" class="form-control">
                        </div>
                        <br>
                        <div class="for-group">
                            <label> Foto Masjid</label><br>
                            <input type="file" name="foto" class="form-control">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>

            </div>
        </div>
    </div>