<?php $this->load->view("static/header") ?>
<?php $this->load->view("static/leftbar") ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Data Barang Keluar</h5>
                                        <div class="row">
                                            
                                            <div class="col-lg-6">
                                                <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_keluar/tambah" class="mb-2 mr-2 btn btn-primary" style="text-align:right;">Tambah</a>

                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="tbl_bk" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>KODE PO</th>
                                                        <th>TGL KELUAR</th>
                                                        <th>PELANGGAN</th>
                                                        <th>BARANG</th>
                                                        <th>JUMLAH KELUAR</th>                                
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
<?php 
$no = 1;
foreach ($brg_keluar as $key => $value):
?>
                                                    <tr>
                                                        <th scope="row"><?php echo $no;?></th>
                                                        <td><?php echo $value['kd_keluar'];?></td>
                                                        <td><?php echo $value['tgl_keluar'];?></td>
                                                        <td><?php echo $value['id_pel'];?></td>
                                                        <td><?php echo $value['kd_brg'];?></td>
                                                        <td><?php echo $value['jml_keluar'];?></td>  
                                                        <td>
                                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_keluar/ubah?kd_keluar=<?php echo $value['kd_keluar'];?>" style="display: none">
                                                            <button >Edit</button></a> 
                                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_keluar/hapus?kd_keluar=<?php echo $value['kd_keluar'];?>">
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
    <?php $this->load->view("static/footer") ?>
    <script>
    $(document).ready(function() {
        $('#tbl_bk').DataTable();
    } );
</script>
