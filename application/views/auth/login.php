<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>SIG GeoQurban</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/') ?>ext/customScroll/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/style.default.css" rel="stylesheet">
    <script src="<?= base_url('assets/') ?>https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/regis/') ?>css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/regis/') ?>fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url('assets/regis/') ?>css/style.css" />
</head>

<body>

    <?php
    error_reporting(0);
    if ($data_login != null) {
        foreach ($data_login as $row) {
            $username_asli = $row->username;
            $password_asli =  $row->password;
            //   echo $row ->id_admin;
            //   echo "<br>";
        }
        // echo $username;
        // echo $password;

        if ($username !=  $username_asli && $password !=  $password_asli) {
            echo "<script>alert('Username dan Pasword Salah!');</script>";


            base_url("login/index");
        } else if ($password !=  $password_asli) {
            echo "<script>alert('Pasword Salah!');</script>";
            base_url("login/index");
        } else if ($username !=  $username_asli) {
            echo "<script>alert('Username Salah!');</script>";

            base_url("login/index");
        }
    }


    ?>

    <div class="page-content">
        <div class="form-v1-content">
            <div class="wizard-form">
                <div class="container">
                    <?= $this->session->flashdata('message') ?>

                    <form class="form-signin" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                        <a class="logo">
                            <img src="<?= base_url('assets/'); ?>gambar/GeoQurban3.png">
                        </a>
                        <h2 class="text-center" class="heading">Login GeoQurban</h2>
                        <br>
                        <br>
                        <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                        <br>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <br>
                        <br>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Login
                        </button>
                    </form>
                    <br>
                    <br>
                    <div class="text-center">
                        <p>
                        <h5 class="text-center" class="form-signin-heading">Belum memiliki akun?</h5>
                        <a class="btn btn-md btn-primary btn-link" type="submit" href="<?= base_url("registrasi/index"); ?>">
                            Buat Akun Admin GeoQurban
                        </a>
                        </p>
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
    <script src="<?= base_url('assets/regis/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/jquery.steps.js"></script>
    <script src="<?= base_url('assets/regis/') ?>js/main.js"></script>
    </form>
</body>

</html>