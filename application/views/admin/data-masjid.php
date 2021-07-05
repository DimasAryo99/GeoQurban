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
                <h3 class="text-themecolor m-b-0 m-t-0">Data Lokasi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Lokasi</li>
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
                        <h4 class="card-title">Data Lokasi</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_lokasi"><!--i class="fa fa-plus fa-sm"></!--i-->Tambah Lokasi</button>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Masjid</th>
                                        <th>Alamat Masjid</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>No.Tlp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Masjid Agung Al-Azhar</td>
                                        <td>Jl. Sisingamangaraja No.1, RT.2/RW.1, Kota Jakarta Selatan</td>
                                        <td>****</td>
                                        <td>****</td>
                                        <td>(021) 72783683</td>
                                        <td><button class="btn btn-success btn-sm " type="button"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm " type="button"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Masjid Asy-Syarif Al-Azhar</td>
                                        <td>Jl. Puspitaloka Sektor 3.2, Kota Tangerang Selatan</td>
                                        <td>****</td>
                                        <td>****</td>
                                        <td>(021) 5375647</td>
                                        <td><button class="btn btn-success btn-sm " type="button"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm " type="button"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Masjid Al-Azhar Bandung</td>
                                        <td>Jl. Citarip Timur Rt. 04/05, Bandung</td>
                                        <td>****</td>
                                        <td>****</td>
                                        <td>(021) 5375647</td>
                                        <td><button class="btn btn-success btn-sm " type="button"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm " type="button"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="for-group">
                            <label>Nama Masjid</label>
                            <input type="text" name="nama_barang" class="form-control">
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Alamat</label>
                            <textarea type="text" name="keterangan" class="form-control" rows="2"></textarea>
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="keterangan" class="form-control" rows="3"></textarea>
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Latitude</label>
                            <input type="text" name="kategori" class="form-control"></input>
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Longitude</label>
                            <input type="text" name="stok" class="form-control">
                        </div>
                        <br>
                        <div class="for-group">
                            <label>No. Telpon</label>
                            <input type="text" name="harga" class="form-control">
                        </div>
                        <br>
                        <div class="for-group">
                            <label> Foto Hewan Qurban</label><br>
                            <input type="file" name="gambar" class="form-control">
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