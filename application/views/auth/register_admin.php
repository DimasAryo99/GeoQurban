<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>GeoQurban</title>
    <meta name="author" content="luckynvic@gmail.com">
    <link href="<?= base_url('assets/')  ?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/')  ?>ext/customScroll/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?= base_url('assets/')  ?>css/style.default.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>

<body>
    <nav class="navbar navbar-default nav-fixed-top" role="navigation" id="app-nav-bar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GeoQurban</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <!--ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="browse.html">Browse</a>
                </li>

            </!--ul-->
            <!--ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Application<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Setting</a>
                        </li>
                        <li>
                            <a href="#">Manage User</a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Point</a>
                        </li>
                        <li>
                            <a href="#">Category</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>

            </!--ul-->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= base_url("login_admin/index") ?>">Login</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <style>
        .scroll {
            height: 300px;
            width: 300px;
            overflow: scroll;
        }
    </style>

    <div class="container">

        <form class="form-signin" method="post" action="<?= base_url('registrasi_admin/index'); ?>">
            <div class="text-center">
                <h2 class="form-signin-heading">Registrasi Admin</h2>
            </div>
                <input type="text" class="form-control" name="email" id="email" placeholder="email" autofocus>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                <input type="text" class="form-control" name="nama_admin" id="nama_admin" placeholder="nama admin" autofocus>
                <?= form_error('nama_admin', '<small class="text-danger pl-3">', '</small>'); ?>
                
                <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="nomor telepon" autofocus>
                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
             
                <input type="text" class="form-control" name="username" id="username" placeholder="username" autofocus>
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                
                <input type="password" class="form-control" name="password1" id="password1" placeholder="password">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>

                <input type="password" class="form-control" name="password2" id="password2" placeholder="repeat password">

                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Register
                </button>
        </form>

    </div>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/')  ?>js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url('assets/')  ?>js/bootstrap.min.js"></script>

</body>

</html>