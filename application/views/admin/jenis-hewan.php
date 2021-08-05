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
                <h3 class="text-themecolor m-b-0 m-t-0">Jenis Hewan</h3>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Lokasi</li> -->
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-database" aria-hidden="true"></i> Jenis Hewan</h4>
                        <button type="button" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#tambah_hewan">
                            Tambah Hewan
                        </button>
                        <!-- <hr size="12px"> -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_lokasi">
                            i class="fa fa-plus fa-sm"></!--iTambah Lokasi
                        </button> -->
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Hewan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($jenis as $j) :  ?>
                                    <tr>
                                        <td scope="row"><?= $i; ?></td>
                                        <td><?= $j->jenis_hewan ?></td>
                                        <td width="150px">
                                        <a href="<?php echo site_url('admin/jenis_hewan/tampilan_edit_hewan/'.$j->id_hewan)?>"
											    class="btn btn-primary btn-sm mb-2"><i class="fa fa-edit"></i></a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/jenis_hewan/delete/' . $j->id_hewan) ?>')" href="#!" class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
                    <form action="<?= base_url('admin/jenis_hewan/tambah_hewan') ?>" method="post" enctype="multipart/form-data">

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