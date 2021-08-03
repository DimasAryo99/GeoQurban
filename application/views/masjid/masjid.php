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
                    <div class="row mb-5">

                        <?php foreach ($masjid as $m) :  ?>
                            <div class="col-md-4 mb-3">
                                <div class="card" style="width: 20rem;">
                                    <a class="img-card">
                                        <center>
                                            <img src="<?= base_url() . '/foto_masjid/' . $m->foto ?>" class="img-fluid img-thumbnail" alt="Responsive image" width="500" height="200">
                                        </center>
                                    </a>
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
                </div>
            </div>
        </div>
        <!-- <div class="col-xs-12 col-md-14">
            <div class="row">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div> -->
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