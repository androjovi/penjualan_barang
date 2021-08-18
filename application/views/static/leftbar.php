<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">
                    <img height= "40" width= "180"  src="<?= base_url("assets/images/avatars/PT. Surya Semesta Sakti.jpeg") ?>" alt="">
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">                
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/user.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">Profil</button>                                            
                                            <button type="button" tabindex="0" class="dropdown-item">Ubah Password</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="<?= base_url("Login/logout_process") ?>" tabindex="0" class="dropdown-item">Keluar</a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>        

            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                        
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>                                    
                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Beranda
                                    </a>
                                </li>                                
                                <li class="app-sidebar__heading">Barang</li>
                                <li>
                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_barang">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        Daftar Barang
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Klien</li>
                                <li>
                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_pelanggan">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>Pelanggan
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_supplier/">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Supplier
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Persediaan Barang</li>
                                <li>
                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_masuk">
                                        <i class="pe-7s-gif">
                                        </i>Barang Masuk
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_keluar">
                                        <i class="metismenu-icon">
                                        </i>Barang Keluar
                                    </a>
                                </li>
                                <!-- <li class="app-sidebar__heading">Laporan</li>
                                <li>                                    
                                    <a href="beranda.html">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Laporan Persediaan Barang
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>   