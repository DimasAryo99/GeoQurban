<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?= base_url('dashboard/') ?>" class="logo">
                            <img src="<?= base_url('assets/'); ?>gambar/GeoQurban2.png">
                        </a>
                        <!-- <a class="logo" href="<?= base_url('dashboard/') ?>"></a> -->
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="<?= base_url('dashboard/') ?>">Home</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url('masjid/') ?>">Masjid</a></li>
                            <li class="scroll-to-section"><a href="<?= base_url('tentang/') ?>">About</a></li>
                            <li class="scroll-to-section">
                                <div class="main-red-button-hover"><a href="<?= base_url('login_admin') ?>">Login</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>