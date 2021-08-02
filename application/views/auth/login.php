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
    <?php 
    error_reporting(0);
    if ($data_login != null) {
        foreach($data_login as $row)
        {
          $username_asli = $row ->username;
          $password_asli =  $row ->password;
        //   echo $row ->id_admin;
        //   echo "<br>";
        }
        // echo $username;
        // echo $password;

        if ($username !=  $username_asli && $password !=  $password_asli) {
            echo "<script>alert('Username dan Pasword Salah!');</script>";
			
            
             base_url("login/index");
        }else if ($password !=  $password_asli) {
            echo "<script>alert('Pasword Salah!');</script>";
             base_url("login/index");

        }else if($username !=  $username_asli ){
            echo "<script>alert('Username Salah!');</script>";
        
             base_url("login/index");
        }

       
    }

          
    ?>



        <div class="container">

            <form class="form-signin" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                <h2 class="text-center" class="form-signin-heading">Login</h2>
                
                <br>
                <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
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
                    <a class="btn btn-md btn-primary btn-link" type="submit" href="<?= base_url("registrasi/index");?>">
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