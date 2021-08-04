<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="rounded" id="mapid" style="width: 1100px; height: 400px;"></div>
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

<script>
    var mymap = L.map('mapid').setView([-6.300641, 106.814095], 11);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);

    var iconMasjid = L.icon({
        iconUrl: "<?= base_url('assets/') ?>gambar/mosque.png",
        iconSize: [36, 47] // size of the icon
    });

    <?php foreach ($masjid as $key => $value) { ?>
        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {icon: iconMasjid}).addTo(mymap)
            .bindPopup(
                "<img src='<?= base_url('foto_masjid/' . $value->foto )?>' width='' > " +
                "<br><br> " +
                "<b><h5><?= $value->nama_masjid ?></h5></b><br>" +
                "<h6><?= $value->alamat ?></h6><br>" +
                "<a>Klik </a>" +
                "<a href='<?= base_url('masjid/details/' . $value->id_masjid) ?>' class='stretched-link'>disini</a>" +
                "<a> untuk melihat hewan Qurban </a>");
    <?php } ?>
</script>