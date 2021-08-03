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
    <div class="page-content">
        <div class="form-v1-content">
            <div class="wizard-form">
                <div class="container">
                    <?= $this->session->flashdata('message') ?>

                    <form class="form-signin" action="<?= base_url('login_admin'); ?>" method="post">
                        <h2 class="text-center" class="heading">Login Admin Masjid</h2>
                        <br>
                        <br>
                        <input type="text" name="email" id="email" class="form-control" placeholder="email" autofocus>
                        <br>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <br>
                        <br>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Login
                        </button>
                    </form>
                    <br>
                    <br>
                    <div class="text-center" >
                        <p>
                        <h5 class="text-center" class="form-signin-heading">Belum memiliki akun?</h5>
                        <a class="btn btn-md btn-primary btn-link" type="submit" href="<?= base_url("registrasi_admin/index"); ?>">
                            Buat Akun Admin Masjid
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