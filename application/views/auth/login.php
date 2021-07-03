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
<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">	
<div class="container">
    <form class="form-signin">
        <p>
        <h2 class="text-center" class="form-signin-heading">Login</h2>
        </p>
        <br>
        <input type="text" name="username" class="form-control" placeholder="username/email address" autofocus>
        <input type="password" name="password" class="form-control" placeholder="password">
        <br>
        <button class="btn btn-xs btn-primary btn-block" type="submit" href="#">
            <h4>Login</h4>
        </button>
        <br>
        <div class="text-center">
            <p>
            <h5 class="text-center" class="form-signin-heading">Dont have any account?</h5>
            </p>
            <button class="btn btn-md btn-primary btn-link" type="submit" href="#">
                Create Account
            </button>
        </div>

    </form>
</div>

<!-- Bootstrap core JavaScript
        ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/') ?>js/jquery-1.10.2.min.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
</form>
</body>

</html>