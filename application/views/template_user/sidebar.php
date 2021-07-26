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
    <div id="sidemenu" >
        <div col-sm>
            <style>
                .scroll {
                    height: 650px;
                    overflow: scroll;
                    
                }

            </style>

            <button type="button" onclick="myFunction()" class="fa fa-eye-slash btn btn-primary btn-block btn-xs" aria-hidden="true">Hide/Unhide</button>
            <div id="myDIV">
                <div class="scroll">
                    <div class="list-group point-list-view">
                        <tbody id="daftarmarker">
                            <?php foreach ($user as $u) :  ?>
                                <a href="" class="list-group-item point-item">
                                    <h4 class="list-group-item-heading">
                                        <tr>
                                            <td><?php echo $u->nama_masjid; ?></td>
                                            <p class="list-group-item-text">
                                                <td><h5><?php echo $u->alamat; ?></h5></td>
                                                <!-- <td><?php echo $u->latitude; ?></td>
                                        <td><?php echo $u->longitude; ?></td> -->
                                            </p>
                                            <td><button type="button" title="view marker lokasi" id="viewmarker" data-idmasjid="<?php echo $u->id_masjid; ?>" class="btn btn-xs btn-info" name="button"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                                            <!-- <td><button type="button" title="view marker lokasi" id="viewmarker" data-idmasjid="<?php echo $u->id_masjid; ?>" class="btn btn-xs btn-info" name="button"><span class="glyphicon glyphicon-eye-open"></span></button></td> -->
                                        </tr>
                                    </h4>
                                </a>
                            <?php endforeach; ?>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>