<div class="col-xs-12 col-md-16">
    <div class="well">
        <form class="form-inline" role="form">
            <div class="form-group ">
                <label class="sr-only" for="searchText">Search</label>
                <input type="text" class="form-control input-sm" id="searchText" placeholder="Search Location">
            </div>
            <button type="submit" class="btn btn-default btn-sm">
                <i class="glyphicon glyphicon-search"></i>
            </button>
            <!--button class="btn btn-default btn-sm">
                    <i class="glyphicon glyphicon-filter"></i> Filter
                </!--button-->
        </form>
    </div>
</div>

<div id="contact" class="contact-us section">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="container">
                    <!-- <tr id="filter_global">
                        <td>
                            <input type="text" class="global_filter" id="global_filter">
                        </td> -->

                    <!-- <form action="" method="POST">
                        <input type="text" name="keyword" id="" placeholder=" search masjid" autocomplete="off">
                        <button type="submit" name="cari" >Cari</button>
                    </form> -->

                    <br>
                    <br>
                    <div class="row mb-5">

                        <?php foreach ($masjid as $m) :
                        ?>
                            <div class="col-md-4 mb-3">
                                <div class="card" style="width: 20rem;">
                                    <?php if ($m->foto == '') : ?>
                                        <a class="img-card">
                                            <center>
                                                <img src="<?= base_url('foto_masjid/') ?>cover.jpg" class="img-fluid img-thumbnail" alt="Responsive image" width="500px" height="200px">
                                            </center>
                                        </a>
                                    <?php else : ?>
                                        <a class="img-card">
                                            <center>
                                                <img src="<?= base_url('/foto_masjid/') . $m->foto ?>" class="img-fluid img-thumbnail" alt="Responsive image" width="500px" height="200px">
                                            </center>
                                        </a>
                                    <?php endif; ?>
                                    <!--?php
                                    if ($m->foto == '') {
                                        echo "<center><img src='foto_masjid/cover.jpg' width='250px' height='240px'></center>";
                                    } else {
                                        echo "<center><img src='foto_masjid/".$m->foto ."'</center><br>";
                                    }
                                    ?-->
                                    <!-- <a class="img-card">
                                        <center>
                                            <img src="<?= base_url() . '/foto_masjid/' . $m->foto ?>" class="img-fluid img-thumbnail" alt="Responsive image" width="500" height="200">
                                        </center>
                                    </a> -->
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <h4><?= $m->nama_masjid ?></h4>
                                        </h5>
                                        <p class="card-text">
                                            <?= $m->alamat ?>
                                        </p>
                                        <a>
                                            <?= anchor('masjid/details/' . $m->id_masjid, '<div class="btn btn-primary btn-sm mb-2"><i style="color:white;">More Info</i></div>') ?>

                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- ---------------------------------------------------- -->
                            <!-- <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                            <div>
                                <div class="thumbnail">
                                    <a class="img-card">
                                        <center>
                                            <img src="<?= base_url() . '/foto_masjid/' . $m->foto ?>" class="img-fluid" alt="Responsive image" width="500" height="200">
                                        </center>
                                    </a>

                                    <div class="caption">
                                        <h3><?= $m->nama_masjid ?></h3>

                                        <div class="card-read-more">
                                            <a>
                                                <?= anchor('masjid/details/' . $m->id_masjid, '<div class="btn btn-primary btn-sm mb-2"><i style="color:white;">More Info</i></div>') ?>

                                            </a> -->
                            <!--a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i>
                            Find In Map</!--a-->

                            <!-- </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <?php endforeach;  ?>
                        <div class="shadow p-4 mb-4 bg-white">
                            <div class="col-mid" style="height: 100%;">
                                <div class="section-heading">
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </tr> -->
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/') ?>js/jquery-1.10.2.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/holder.js"></script>
<script src="<?= base_url('assets/') ?>js/card.js"></script>
<script src="<?= base_url('assets/') ?>scss/responsive.scss"></script>
<link rel="stylesheet" href="<?= base_url('assets/'); ?>scss/card.scss">
<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/card.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>