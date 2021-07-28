<div id="contact" class="contact-us section">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-14">
                <div class="row point-info">

                    <?php foreach ($data_masjid1 as $a) : ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3><?= $a->nama_masjid ?></h3>
                            </div>

                            <div class="panel-body">
                                <p>
                                    <?= $a->deskripsi_masjid ?>
                                </p>
                            <?php endforeach; ?>
                            <br>
                            <p>
                            <h4>Data Qurban</h4>
                            </p>
                            <!-- <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Tahun
                            <span class="caret"></span>
                        </button>

                        < <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">2018</a></li>
                            <li><a href="#">2019</a></li>
                            <li><a href="#">2020</a></li>
                        </ul> -->

                            <table class="table table-striped mt-3" style="width: 100%;">
                                <thead>
                                    <tr class="table-primary">
                                        <th>No</th>
                                        <th>Jenis Hewan</th>
                                        <th>Jumlah</th>
                                    </tr>

                                    <?php
                                    $no = 1;
                                    foreach ($data_masjid as $m) :
                                        //foreach ($barang as $brg) : 
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $m->jenis_hewan ?></td>
                                            <td><?= $m->jumlah_hewan ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </thead>
                            </table>
                            <br>
                            <address>
                                <br>
                                <?= $m->alamat ?>
                                <br>
                                <a title="Phone">Kontak : <?= $m->no_telp ?></a>
                            </address>

                            <!--div id="point-gallery-slide" class="carousel slide">
                        <!-- Indicators >
                        <ol class="carousel-indicators">
                            <li data-target="#point-gallery-slide" data-slide-to="0" class="active"></li>
                            <li data-target="#point-gallery-slide" data-slide-to="1"></li>
                            <li data-target="#point-gallery-slide" data-slide-to="2"></li>
                        </ol>


                        <!-- Wrapper for slides >
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="contoh1.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h3>Qurban Bersama Masjid As-syarif</h3>
                                    <p>
                                        Hewan Qurban pada tahun 2018
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="contoh1.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h3>Qurban Bersama Masjid As-syarif</h3>
                                    <p>
                                        Hewan Qurban pada tahun 2019
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Controls >
                        <a class="left carousel-control" href="#point-gallery-slide" data-slide="prev"> <span class="icon-prev"></span> </a>
                        <a class="right carousel-control" href="#point-gallery-slide" data-slide="next"> <span class="icon-next"></span> </a>
                    </!--div-->
                            </div>
                            <br>
                            <div class="panel-footer">
                                <!--a href="point_gallery.html" class="btn btn-default">View All Gallery</!---->
                                <a href='<?= base_url('masjid') ?>' type="button" class="btn btn-danger">Back</a>

                            </div>

                        </div>

                </div>
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