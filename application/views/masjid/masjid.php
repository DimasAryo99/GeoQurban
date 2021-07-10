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

        <!--div class="divider10"></!--div>
                <div-- class="hidden-xs hidden-sm">
                    <h4>Special Offer</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item "> <h4 class="list-group-item-heading" >Discount 10%</h4>
                        <p class="list-group-item-text">
                            Location Address
                        </p> </a>
                        <a href="#" class="list-group-item"> <h4 class="list-group-item-heading" >Promo Packet</h4>
                        <p class="list-group-item-text">
                            Location Address
                        </p> </a>
                        <a href="#" class="list-group-item "> <h4 class="list-group-item-heading" >Sale!</h4>
                        <p class="list-group-item-text">
                            Location Address
                        </p> </a>

                    </div>
                </div-->
    </div>
</div>


<div class="col-xs-12 col-md-14">
    <div class="row">
    <?php foreach($masjid as $m):  ?>
        <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
            <div class="thumbnail">
                <img src="masjid_bsd.jpg" alt="..." width="500" height="200">
                <div class="caption">
                    <h3><?= $m->nama_masjid ?></h3>
                    <p>
                        <?= anchor('masjid/details/' . $m->id_masjid, '<div class="btn btn-sm btn-success col px-md-5 mb-2">More Info</div>') ?>

                        <!--a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i>
                            Find In Map</!--a-->
                    </p>
                </div>
            </div>
        </div>

    <?php endforeach;  ?>        
    </div>
    <div class="col-xs-12 col-md-14">
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
    </div>

</div>
<!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/') ?>js/jquery-1.10.2.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/holder.js"></script>