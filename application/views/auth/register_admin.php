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

</head>

<body>

            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                    <form method="POST" class="signup-form" action="<?= base_url('registrasi_admin/index'); ?>">
                        <h2 class="form-title">Create account</h2>
                        <h3 class="form-title">Data Masjid</h3>

                        <div class="form-group">
                            <input type="text" class="form-input" name="nama_masjid" id="nama_masjid" placeholder="Nama Masjid" autofocus>
                            <?= form_error('nama_masjid', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="deskripsi_masjid" id="deskripsi_masjid" placeholder="Deskripsi Masjid" autofocus>
                            <?= form_error('deskripsi_masjid', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="alamat" id="alamat" placeholder="Alamat Masjid" autofocus>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="no_telp" id="no_telp" placeholder="No. Telepon Masjid" autofocus>
                            <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="longitude" id="longitude" placeholder="Longitude" autofocus>
                            <?= form_error('longitude', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="latitude" id="latitude" placeholder="Latitude" autofocus>
                            <?= form_error('latitude', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!--div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="form-input" name="gambar">
                                <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </!--div-->
                        <!-- Data Masjid -->
                        <br>
                        <h3 class="form-title">Data Admin Masjid</h3>

                        <div class="form-group">
                            <input type="text" class="form-input" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autofocus>
                            <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="email" id="email" placeholder="Alamat Email" autofocus>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username" autofocus>
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="no_telp" id="no_telp" placeholder="No. Telepon" autofocus>
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
                        Have already an account ? <a href="<?= base_url("login_admin/index")?>" class="loginhere-link">Login here</a>
                    </p>
            </div>

    <!-- JS -->
    <script src="<?= base_url('assets/regis2/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/regis2/') ?>js/main.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery.steps.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>