<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>SIG GeoQurban</title>
    <meta name="author" content="luckynvic@gmail.com">
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/') ?>ext/customScroll/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/style.default.css" rel="stylesheet">
    <script src="<?= base_url('assets/') ?>https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>

<body>
        <div class="container">

            <form class="form-signin" action="<?php echo base_url('login_admin/aksilogin'); ?>" method="post">
                <h2 class="text-center" class="form-signin-heading">Login Admin Masjid</h2>
                
                <br>
                <input type="text" name="email" class="form-control" placeholder="email" autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password">

                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Login
                </button>
                </form>
                <br>
                <div class="text-center">
                    <p>
                    <h5 class="text-center" class="form-signin-heading">Dont have any account?</h5>
                    </p>
                    <a class="btn btn-md btn-primary btn-link" type="submit" href="<?= base_url("registrasi_admin/index");?>">
                        Create Account
                    </a>
                </div>
           

        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?= base_url('assets/') ?>js/jquery-1.10.2.min.js"></script>
        <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    </form>
</body>

</html>