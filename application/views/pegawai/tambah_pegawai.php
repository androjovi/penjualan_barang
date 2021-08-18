<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Aplikasi Persediaan Barang PT. Surya Semesta Sakti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Tables are the backbone of almost all web applications.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="http://localhost/bcit-ci-CodeIgniter-b73eb19/assets/css/main.css" rel="stylesheet"></head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">
                    <img height= "40" width= "180"  src="assets/images/avatars/PT. Surya Semesta Sakti.jpeg" alt="">
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
                                            <button type="button" tabindex="0" class="dropdown-item">Keluar</button>
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
                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_supplier">
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
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                   <div class="card-body"><h5 class="card-title">Tambahkan Pegawai</h5>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>data_pegawai/<?php echo $type;?>">
                                            <div class="position-relative row form-group"><label for="id" class="col-sm-2 col-form-label">ID</label>
                                                <div class="col-sm-10"><input name="id" id="id" value="<?php echo $id; ?>" placeholder="with a placeholder" type="kode" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10"><input name="nama" id="nama" value="<?php echo $nama; ?>" type="text" class="form-control"></div>
                                            </div>                                            
                                            <div class="position-relative row form-group"><label for="nama" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <ul>
                                                        <input type="radio" name="jenis_kelamin" class="form-check-input" value="lk" checked/><label class="form-check-label" for="jenis_kelamin"> 
                                                        Laki-Laki </label>
                                                    </ul>
                                                    <ul>
                                                        <input type="radio" name="jenis_kelamin" class="form-check-input" value="pr" checked/><label class="form-check-label" for="jenis_kelamin"> 
                                                        Perempuan </label>
                                                    </ul>
                                                </div>
                                            </div>                                        
                                            <div class="position-relative row form-group"><label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                                <div class="col-sm-10">
                                                    <select name="jabatan" id="jabatan" class="form-control">
                                                        <option>Pilih</option>
                                                        <option value="ton" <?php if($jabatan == 'bag_gudang') {echo "selected";} ?> >Bagian Gudang</option>
                                                        <option value="ppic" <?php if($jabatan == 'ppic') {echo "selected";} ?> >PPIC</option>
                                                        <option value="produksi" <?php if($jabatan == 'produksi') {echo "selected";} ?> >Produksi</option>
                                                        <option value="purchasing" <?php if($jabatan == 'purchasing') {echo "selected";} ?> >Purchasing</option>
                                                        <option value="Sales" <?php if($jabatan == 'Sales') {echo "selected";} ?> >Sales</option>                 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="hak_akses" class="col-sm-2 col-form-label">Hak Akses</label>
                                                <div class="col-sm-10"><input name="hak_akses" id="hak_akses" value="<?php echo $hak_akses; ?>" type="text" class="form-control"></div>
                                            </div>                                            
                                            <div class="position-relative row form-group"><label for="no_telp" class="col-sm-2 col-form-label">No. Telepon</label>
                                                <div class="col-sm-10"><input name="no_telp" id="no_telp" value="<?php echo $no_telp; ?>" type="number" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10"><textarea name="alamat" id="alamat" class="form-control"> <?php echo $alamat; ?> </textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                                <div class="col-sm-10"><input name="email" id="email" value="<?php echo $email; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="password" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10"><input name="password" id="password" value="<?php echo $password; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary">Kirim</button>

                                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_pegawai/" class="btn btn-secondary">Kembali</a>              
                                                </div>
                                            </div>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/index.html" class="nav-link">
                                                Yiek Alfian Rifki Ananda
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://3s.weebly.com/" class="nav-link">
                                                PT. Surya Semesta Sakti
                                            </a>
                                        </li>
                                    </ul>
                                </div>                                
                            </div>
                        </div>
                    </div>    
                </div>
        </div>
    </div>
<script type="text/javascript" src="http://localhost/bcit-ci-CodeIgniter-b73eb19/assets/js/main.js></script></body>
</html>
