<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registrasi Admin Masjid GeoQurban</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/regis/') ?>css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/regis/') ?>fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>css/style.css" />
</head>

<body>
    <div class="page-content">
        <div class="form-v1-content">
            <div class="wizard-form">
                <form class="form-register" action="<?= base_url('registrasi_admin/index'); ?>" method="POST">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <p class="step-icon"><span>01</span></p>
                            <span class="step-text">Data Pribadi</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Informasi Data Admin Masjid</h3>
                                    <p>Silakan masukkan informasi Anda dan lanjutkan ke langkah berikutnya sehingga kami dapat membuat akun Anda. </p>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Nama Lengkap</legend>
                                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Email Anda</legend>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Username</legend>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Nomor Telepon</legend>
                                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>New Password</legend>
                                        </fieldset>
                                        <input type="password" class="form-control" name="password1" id="password1" placeholder="">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>Confrim Password</legend>
                                            <input type="password" class="form-control" name="password2" id="password2" placeholder="">
                                        </fieldset>
                                    </div>
                                </div>


                            </div>
                        </section>

                        <!------------------------------------------------------ SECTION 2 ------------------------------------------------------->
                        <h2>
                            <p class="step-icon"><span>02</span></p>
                            <span class="step-text">Data Masjid</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Informasi Data Masjid</h3>
                                    <p>Silakan masukkan informasi Anda dan lanjutkan ke langkah berikutnya sehingga kami dapat membuat akun Anda. </p>
                                </div>

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Nama Masjid</legend>
                                            <input type="text" class="form-control" name="nama_masjid" id="nama_masjid" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('nama_masjid', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Deskripsi Masjid</legend>
                                            <input type="text" class="form-control" name="deskripsi_masjid" id="deskripsi_masjid" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('deskripsi_masjid', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Alamat Masjid</legend>
                                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Nomor Telepon</legend>
                                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>Longitude</legend>
                                            <input type="text" class="form-control" name="longitude" id="longitude" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('longitude', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>Latitude</legend>
                                            <input type="text" class="form-control" name="latitude" id="latitude" placeholder="" autofocus>
                                        </fieldset>
                                        <?= form_error('latitude', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Upload Foto Masjid</legend>
                                            <div class="custom-file">
                                                <!-- <input type="fie" class="custom-file-input" id="inputGroupFile01" name="" placeholder="" required> -->
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <!-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> -->
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">
                                    Register
                                </button>
                            </div>

                            <!-- <div id="form-total">
                                <button class="zmdi zmdi-check" type="submit"></button>
                            </div> -->
                        </section>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/regis/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery.steps.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>