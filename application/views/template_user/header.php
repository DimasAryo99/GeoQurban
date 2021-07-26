<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>SIG GEOQURBAN</title>
    <meta name="author" content="luckynvic@gmail.com">
    <link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>css/style.default.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/') ?>images/favicon.png">
    <style>
        body{
            background: #fff;
        }

        img{
            width: 300px;
            height: 200px;
            border-radius: 5px;
            margin-bottom: 5px;
            margin-left: 10px;
        }
    </style>

    <link href="<?= base_url('assets/') ?>ext/customScroll/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/style.default.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <?= $map['js']; ?>
</head>

</html>