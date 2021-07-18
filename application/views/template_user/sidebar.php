<div id="map-canvas"></div>
    <div class="visible-lg visible-md">
        <div id="search-box">
            <form class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only" for="searchText">Search</label>
                    <input type="text" class="form-control input-sm" id="searchText" placeholder="Search Location">
                </div>
                <button type="submit" class="btn btn-default btn-sm">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </form>
        </div>
        <div id="sidemenu" class="well">
            <!--div class="btn-group btn-group-justified btn-group-sm">
                    <a class="btn btn-default"> <i class="glyphicon glyphicon-fullscreen"></i> Fit in Window </a>
                    <a class="btn btn-default"> <i class="glyphicon glyphicon-filter"></i> Filter </a>
                </!--div>
                <div class="divider10"></div>
                <div-- class="panel panel-default">
                    <div class="panel-body">
                        <a>Sort By</a>
                    </div>
                </div-->
            <style>
                .scroll{
                    height: 650px;
                    overflow: scroll;
                }
            </style>
            <div class="scroll">
                <div class="list-group point-list-view">
                    <tbody id="daftarmarker">
                      <?php foreach ($user as $u) :  ?>
                            <a href="" class="list-group-item point-item">
                            <h4 class="list-group-item-heading">
                                <tr>
                                    <td><?php echo $u->nama_masjid;?></td>
                                    <p class="list-group-item-text">
                                    <td><?php echo $u->latitude;?></td>
                                    <td><?php echo $u->longitude;?></td>
                                    </p>
                                    <td><button type="button" title="view marker lokasi" id="viewmarker" data-idmasjid="<?php echo $u->id_masjid;?>" class="btn btn-sm btn-info" name="button"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                                </tr>
                            </h4>
                            </a>
                        <?php endforeach; ?>
                    </tbody>  
                </div>
            </div>
        </div>
    </div>