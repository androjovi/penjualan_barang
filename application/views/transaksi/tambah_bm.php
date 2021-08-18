<?php $this->load->view("static/header") ?>
<?php $this->load->view("static/leftbar") ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                   <div class="card-body"><h5 class="card-title">Tambahkan Transaksi Barang Masuk</h5>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>data_masuk/<?php echo $type;?>">
                                            <div class="position-relative row form-group"><label for="kd_masuk" class="col-sm-2 col-form-label">Kode Barang Masuk</label>
                                                <div class="col-sm-10"><input name="kd_masuk" id="kd_masuk" value="<?php echo $kd_masuk; ?>" placeholder="with a placeholder" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Barang Masuk</label>
                                                <div class="col-sm-10"><input name="tgl_masuk" id="tgl_masuk" value="<?php echo $tgl_masuk; ?>" type="date" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="id_supp" class="col-sm-2 col-form-label">ID Supplier</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="id_supp" name="id_supp" onchange="funkd_supplier(this.value)">
                                                        <option value="">Choose</option>
<?php foreach ($supplier as $key => $value): ?>
                                                        <option value="<?php echo $value['id_supp']; ?>"><?php echo $value['id_supp']." || ".$value['nm_supp']; ?></option>
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
                                            <div class="position-relative row form-group"><label for="jml_masuk" class="col-sm-2 col-form-label">Jumlah Masuk</label>
                                                <div class="col-sm-10"><input name="jml_masuk" id="jml_masuk" value="<?php echo $jml_masuk; ?>" type="text" class="form-control" onkeyup="funjml_masuk(this.value)"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="jml_stok" class="col-sm-2 col-form-label">Jumlah Stok</label>
                                                <div class="col-sm-10"><input name="jml_stok" id="jml_stok" value="<?php echo $jml_stok; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary">Kirim</button>

                                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_masuk/" class="btn btn-secondary">Kembali</a>              
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
                url: "http://localhost/bcit-ci-CodeIgniter-b73eb19/data_masuk/get_stok_barang",
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

    function funjml_masuk(val) {
        var jml_masuk = Number(val);
        var stok = Number($('#stok').val());
        var total_stok = stok+jml_masuk;

        $('#jml_stok').val(total_stok);
    }
</script>>

