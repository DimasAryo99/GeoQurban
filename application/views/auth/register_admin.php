<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/regis2/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/regis2/') ?>css/style.css">

    <!-- Link Leaflet -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

</head>

<body>

    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <form method="POST" class="signup-form" action="<?= base_url('registrasi_admin/index'); ?>" enctype="multipart/form-data">
            <h2 class="form-title">Create account</h2>
            <center>

                <h3 class="form-title">Data Masjid</h3>
            </center>

            <div class="form-group">
                <input type="text" class="form-input" name="nama_masjid" 
                value="<?= set_value('nama_masjid');?>" id="nama_masjid" placeholder="Nama Masjid" autofocus>
                <?= form_error('nama_masjid', '<small class="text-danger pl-3">', '</small>'); ?> 
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="deskripsi_masjid" id="deskripsi_masjid" 
                value="<?= set_value('deskripsi_masjid');?>" placeholder="Deskripsi Masjid" autofocus>
                <?= form_error('deskripsi_masjid', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="alamat" id="alamat" 
                value="<?= set_value('alamat');?>" placeholder="Alamat Masjid" autofocus>
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="no_telp" id="no_telp" 
                value="<?= set_value('no_telp');?>" placeholder="No. Telepon Masjid" autofocus>
                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input type="file" class="form-input" name="foto" id="foto">
                <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            
            <br>
            <center>

                <h3 class="form-title">Lokasi</h3>
            </center>

            <!-- Peta Ditampil -->
            <center>

                <div id="mapid" style="width: 400px; height: 400px;"></div>
            </center>
            <br>
            <div class="form-group">
                <input type="text" class="form-input" name="latitude" id="Latitude" placeholder="Latitude" autofocus>
                <?= form_error('latitude', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="longitude" id="Longitude" placeholder="Longitude" autofocus>
                <?= form_error('longitude', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>


            <!-- Data Masjid -->
            <br>
            <center>

                <h3 class="form-title">Data Admin Masjid</h3>
            </center>

            <div class="form-group">
                <input type="text" class="form-input" name="nama_lengkap" id="nama_lengkap" 
                value="<?= set_value('nama_lengkap');?>"placeholder="Nama Lengkap" autofocus>
                <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="email" id="email" 
                value="<?= set_value('email');?>"placeholder="Alamat Email" autofocus>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="username" id="username" 
                value="<?= set_value('username');?>" placeholder="Username" autofocus>
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="no_telp" id="no_telp" 
                value="<?= set_value('no_telp');?>" placeholder="No. Telepon" autofocus>
                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password1" id="password1" placeholder="Password">

                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password2" id="password2" placeholder="Konfirmasi Password">
            </div>

            <div class="form-group">
                <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
            </div>
        </form>
        <p class="loginhere">
            Have already an account ? <a href="<?= base_url("login_admin/index") ?>" class="loginhere-link">Login here</a>
        </p>
    </div>
    <!--script peta -->
    <script>
        var curLocation = [0, 0];
        if (curLocation[0] == 0 && curLocation[1] == 0) 
        {
            curLocation = [-6.300641, 106.814095];
        }

        var mymap = L.map('mapid').setView([-6.300641, 106.814095], 16);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
        }).addTo(mymap);

        var iconMasjid = L.icon({
        iconUrl: "<?= base_url('assets/') ?>gambar/mosque.png",
        iconSize: [40, 51] // size of the icon
        });

        mymap.attributionControl.setPrefix(false);
        var marker = L.marker(curLocation, {
            draggable:'true',
            icon:iconMasjid
        });
        
        marker.on('dragend', function(event) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            $("#Latitude").val(position.lat);
            $("#Longitude").val(position.lng).keyup();
        });

        $("#Latitude, #Longitude").change(function() {
            var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            mymap.panTo(position);
        });

        mymap.addLayer(marker);
    </script>
    <!-- JS -->
    <script src="<?= base_url('assets/regis2/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/regis2/') ?>js/main.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery-1.10.2"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery.steps.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>