<?php $this->load->view("static/header") ?>
<?php $this->load->view("static/leftbar") ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Daftar Barang</h5>
                                    <h5><i><?= $this->session->flashdata("succ_mesg"); unset($_SESSION['succ_mesg']) ?></i></h5>
                                        <div class="row">
                                            
                                            <div class="col-lg-6">
                                                <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_barang/tambah" class="mb-2 mr-2 btn btn-primary" style="text-align:right;">Tambah</a>

                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="tbl_barang" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Barang</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga</th>
                                                        <th>Stok</th>
                                                        <th>Satuan</th>
                                                        <th>Gambar</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
<?php 
$no = 1;
foreach ($barang as $key => $value):
?>
                                                    <tr>

                                                        <th scope="row"><?php echo $no;?></th>
                                                        <td><?php echo $value['kd_brg'];?></td>
                                                        <td><?php echo $value['nm_brg'];?></td>
                                                        <td><?php echo $value['harga'];?></td>
                                                        <td><?php echo $value['stok'];?></td>
                                                        <td><?php echo $value['satuan'];?></td>
                                                        <td><img src="<?php echo $value['gambar'];?>" style="width: 100px;height: 100px;"></td>
                                                        <td>
                                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_barang/ubah?kd_brg=<?php echo $value['kd_brg'];?>">
                                                            <button >Edit</button></a> 
                                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_barang/hapus?kd_brg=<?php echo $value['kd_brg'];?>">
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
                    <?php $this->load->view("static/footer") ?>
                    <script>
    $(document).ready(function() {
        $('#tbl_barang').DataTable();
    } );
    </script>
