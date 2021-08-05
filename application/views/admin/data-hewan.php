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
                        <h4 class="card-title"><i class="fa fa-database" aria-hidden="true"></i> Data Hewan</h4>
                        <hr size="12px">                        
                            <!--i class="fa fa-plus fa-sm"></!--i-->
                                <!-- <button type="button" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#tambah_hewan">
                                    Tambah Hewan
                                </button> -->
                        <!-- <div class="table-responsive"> -->
                        <h4 class="card-title" ><i class="fa fa-filter"></i> Filter</h4>
                        <style>
                           .scroll{
                           height: 300px;
                           width: 300px;
                           overflow: scroll;
                           }
                        </style>

                        <div class="row">
                            <div class="col-sm-2">
                            <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                        Lokasi Masjid
	                        </button>
                           
	                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="scroll">
                                    <?php 
                                        foreach ($masjid as $key) { ?>
                                            <a class='dropdown-item' href='<?php echo base_url('admin/data_hewan/filter_masjid/'.$key->id_masjid)?>'><?= $key->nama_masjid?></a>
                                    <?php       }
                                    ?>

                                    
                                </div>  
                                                                             
		                            <!-- <a class="dropdown-item" href="https://www.malasngoding.com/category/html">HTML</a>
		                            <a class="dropdown-item" href="https://www.malasngoding.com/category/bootstrap-4">Bootstrap 4</a>
		                            <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter">CodeIgniter</a> -->
	                        </div>                
                        </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="container">
                                <h3><strong>  <?php 
                                
                                if (@$nama_masjid != null) {

                                echo $nama_masjid['nama_masjid'];
                                }
                                
                                ?>
                              
                                </strong></h3>
                            </div>
                            </div>
                        </div>
                         
                        

                    </div>
                             <!--div-- class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Tahun

    
        
          
    

        
    
    @@ -63,43 +81,76 @@ class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Upgra
  
                                 </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <a class="dropdown-item" href="#">2020</a>
                                     <a class="dropdown-item" href="#">2019</a>
                                     <a class="dropdown-item" href="#">2018</a>
                                 </div>
                             </div-->
                            
                            <br>                                     
                            <table class="table">                                
                                <thead>                                    
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Hewan</th>
                                        <th>Jumlah Hewan</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>                                 
                                    <?php 
                                    $no = 0;

                                    if ($coba != null) {
                                        # code...
                                    
                                    foreach ($coba as $masjid_hewan) {                                    
                                    $no++;
                                        ?>                                   
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $masjid_hewan['jenis_hewan'] ?></td>
                                        <td><?php echo $masjid_hewan['jumlah_hewan']?></td>
                                        <!-- <td width="150px">
                                            <a href="<?php echo site_url('admin/data_hewan/tampilan_edit_hewan/'.$hewans->id_hewan)?>"
											    class="btn btn-primary btn-sm mb-2"><i class="fa fa-edit"></i></a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/data_hewan/delete/'.$hewans->id_hewan) ?>')"
				        					    href="#!" class="btn btn-danger btn-sm mb-2"><i class="fa fa-trash"></i></a>
                                        </td> -->
                                    </tr>
                                    <?php } } ?>
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

    
        
          
    

        
    
    @@ -121,31 +172,49 @@ class="btn btn-primary btn-sm mb-2"><i class="fa fa-edit"></i></a>
  
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
                    <form action="<?= base_url('admin/data_hewan/tambahhewan')  ?>" method="post" enctype="multipart/form-data">
                        <div class="for-group">
                            <label>Lokasi Masjid</label>
                            <select name="jenis_hewan" class="form-control">
                                <div class="scroll">
                                    <?php 
                                        foreach ($masjid as $key) { ?>
                                            <option value="islam">
                                                <a class='dropdown-item' href='<?php echo base_url('admin/data_hewan/filter_masjid/'.$key->id_masjid)?>'><?= $key->nama_masjid?></a>
                                            </option>
                                    <?php   }
                                    ?>
                                </div>
                            </select>
                        </div>
                        <br>
                        <div class="for-group">
                            <label>Jenis Hewan</label>
                            <select name="jenis_hewan" class="form-control">
                                <option value="sapi">Sapi</option>
                                <option value="kambing">Kambing</option>
                                <option value="domba">Domba</option>
                            </select>
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