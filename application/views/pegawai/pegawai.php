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
                                    <div class="card-body"><h5 class="card-title">Data Pegawai</h5>
                                        <div class="row">
                                            
                                            <div class="col-lg-6">
                                                <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_pegawai/tambah" class="mb-2 mr-2 btn btn-primary" style="text-align:right;">Tambah</a>

                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="tbl_pegawai" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>ID</th>
                                                        <th>NAMA</th>
                                                        <th>JENIS KELAMIN</th>
                                                        <th>JABATAN</th>
                                                        <th>HAK AKSES</th>
                                                        <th>TELEPON</th>
                                                        <th>ALAMAT</th>
                                                        <th>EMAIL</th>
                                                        <th>PASSWORD</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
<?php 
$no = 1;
foreach ($pegawai as $key => $value):
?>
                                                    <tr>
                                                        <th scope="row"><?php echo $no;?></th>
                                                        <td><?php echo $value['id'];?></td>
                                                        <td><?php echo $value['nama'];?></td>
                                                        <td><?php echo $value['jenis_kelamin'];?></td>
                                                        <td><?php echo $value['jabatan'];?></td>
                                                        <td><?php echo $value['hak_akses'];?></td>
                                                        <td><?php echo $value['no_telp'];?></td>
                                                        <td><?php echo $value['alamat'];?></td>
                                                        <td><?php echo $value['email'];?></td>
                                                        <td><?php echo $value['password'];?></td>
                                                        <td>
                                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_pegawai/ubah?id=<?php echo $value['id'];?>">
                                                            <button >Edit</button></a> 
                                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_pegawai/hapus?id=<?php echo $value['id'];?>">
                                                            <button>Hapus</button></a>
                                                        </td>
                                                    </tr> 
<?php 
$no++;
endforeach;
?>                                               
                                                </tbody>
                                            </table>
                                        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/bcit-ci-CodeIgniter-b73eb19/assets/js/main.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl_pegawai').DataTable();
    } );
</script>
</body>
</html>
