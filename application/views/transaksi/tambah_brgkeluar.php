<?php $this->load->view("static/header") ?>
<?php $this->load->view("static/leftbar") ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                   <div class="card-body"><h5 class="card-title">Tambahkan Transaksi Barang Keluar</h5>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>data_keluar/<?php echo $type;?>">
                                            <div class="position-relative row form-group"><label for="kd_keluar" class="col-sm-2 col-form-label">Kode Barang Keluar</label>
                                                <div class="col-sm-10"><input name="kd_keluar" id="kd_keluar" value="<?php echo $kd_keluar; ?>" placeholder="with a placeholder" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="tgl_keluar" class="col-sm-2 col-form-label">Tanggal Barang Keluar</label>
                                                <div class="col-sm-10"><input name="tgl_keluar" id="tgl_keluar" value="<?php echo $tgl_keluar; ?>" type="date" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="id_pel" class="col-sm-2 col-form-label">ID Pelanggan</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="id_pel" name="id_pel" onchange="funkd_pelanggan(this.value)">
                                                        <option value="">Choose</option>
<?php foreach ($pelanggan as $key => $value): ?>
                                                        <option value="<?php echo $value['id_pel']; ?>"><?php echo $value['id_pel']." || ".$value['nm_pel']; ?></option>
<?php endForeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="kd_brg" class="col-sm-2 col-form-label">Kode Barang</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="kd_brg" name="kd_brg" onchange="funkd_barang(this.value)">
                                                        <option value="">Choose</option>
<?php foreach ($barang as $key => $value): ?>
                                                        <option value="<?php echo $value['kd_brg']; ?>"><?php echo $value['kd_brg']." || ".$value['nm_brg']; ?></option>
<?php endForeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="stok" class="col-sm-2 col-form-label">Stok</label>
                                                <div class="col-sm-10"><input name="stok" id="stok" value="<?php echo $stok; ?>" type="text" class="form-control"></div>
                                            </div>                                            
                                            <div class="position-relative row form-group"><label for="jml_keluar" class="col-sm-2 col-form-label">Jumlah Keluar</label>
                                                <div class="col-sm-10"><input name="jml_keluar" id="jml_keluar" value="<?php echo $jml_keluar; ?>" type="text" class="form-control" onkeyup="funjml_keluar(this.value)"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="jml_stok" class="col-sm-2 col-form-label">Sisa Stok</label>
                                                <div class="col-sm-10"><input name="jml_stok" id="jml_stok" value="<?php echo $jml_stok; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary">Kirim</button>
                                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_keluar/" class="btn btn-secondary">Kembali</a>              
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

    <?php $this->load->view("static/footer") ?>

<script type="text/javascript">
    function funkd_barang(val) {
        if (val != '') {
            $.ajax({
                url: "http://localhost/bcit-ci-CodeIgniter-b73eb19/data_keluar/get_stok_barang",
                type: "post",
                data: {
                    kd_brg: val
                } ,
                success: function (response) {
                    var data = JSON.parse(response);
                    $('#stok').val(data.stok);
                   // You will get response from your PHP page (what you echo or print)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                   console.log(textStatus, errorThrown);
                }
            });
        }
    }

    function funjml_keluar(val) {
        var jml_keluar = Number(val);
        var stok = Number($('#stok').val());
        var total_stok = stok-jml_keluar;

        var harga = Number($('#harga').val());
        var total_harga = harga*jml_keluar;


        $('#jml_stok').val(total_stok);
        $('#jml_stok').val(total_stok);
    }
</script>>
