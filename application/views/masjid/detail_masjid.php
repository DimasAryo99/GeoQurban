<div class="modal fade" id="point-info-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Place Infor</h4>
            </div>
            <div class="modal-body">
                <img data-src="holder.js/200x200" class="pull-left margin-right-10" />
                <p>Place Description</p>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default">More Info</button>
                <button type="button" class="btn btn-default">View Gallery</button>
                <button type="button" class="btn btn-default">Show in Map</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
    <div class="col-xs-12 col-md-14">
        <div class="row point-info">
            <?php foreach ($data_masjid as $m) : ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><?= $m->nama_masjid ?></h4>
                    </div>

                    <div class="panel-body">
                        <p>
                            <?= $m->deskripsi_masjid ?>
                        </p>

                        <p>
                        <h3>Data Qurban</h3>
                        </p>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Tahun
                                <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">2018</a></li>
                                <li><a href="#">2019</a></li>
                                <li><a href="#">2020</a></li>
                            </ul>
                        </div>
                        <table class="table table-striped mt-3" style="width: 100%;">
                            <thead>
                                <tr class="table-primary">
                                    <th>No</th>
                                    <th>Jenis Hewan</th>
                                    <th>Jumlah</th>
                                </tr>

                                <?php
                                $no = 1;
                                //foreach ($barang as $brg) : 
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $m->jenis_hewan ?></td>
                                    <td><?= $m->jumlah_hewan ?></td>
                                </tr>


                            </thead>
                        </table>
                        <br>
                        <address>
                            <br>
                            <?= $m->alamat ?>
                            <br>
                            <a title="Phone">Kontak :</a>
                        </address>

                        <div id="point-gallery-slide" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#point-gallery-slide" data-slide-to="0" class="active"></li>
                                <li data-target="#point-gallery-slide" data-slide-to="1"></li>
                                <li data-target="#point-gallery-slide" data-slide-to="2"></li>
                            </ol>


                            <!-- Wrapper for slides -->
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
                            <!-- Controls -->
                            <a class="left carousel-control" href="#point-gallery-slide" data-slide="prev"> <span class="icon-prev"></span> </a>
                            <a class="right carousel-control" href="#point-gallery-slide" data-slide="next"> <span class="icon-next"></span> </a>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <a href="point_gallery.html" class="btn btn-default">View All Gallery</a>
                        <a href="point_map.html" class="btn btn-default">Show In Map</a>

                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/') ?>js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/holder.js"></script>