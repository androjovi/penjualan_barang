<?php $this->load->view("static/header") ?>
<?php $this->load->view("static/leftbar") ?>

                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                   <div class="card-body"><h5 class="card-title">Tambahkan Barang</h5>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>data_barang/<?php echo $type;?>">
                                            <?php

                                            ?>
                                            <div class="position-relative row form-group"><label for="kd_brg" class="col-sm-2 col-form-label">Kode Barang</label>
                                                <div class="col-sm-10"><input name="kd_brg" id="kd_brg" value="<?php echo $kd_brg; ?>" placeholder="with a placeholder" type="kode" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="namabrg" class="col-sm-2 col-form-label">Nama Barang</label>
                                                <div class="col-sm-10"><input name="nm_brg" id="nm_brg" value="<?php echo $nm_brg; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="harga" class="col-sm-2 col-form-label">Harga Barang</label>
                                                <div class="col-sm-10"><input name="harga" id="harga" value="<?php echo $harga; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="stok" class="col-sm-2 col-form-label">Stok Barang</label>
                                                <div class="col-sm-10"><input name="stok" id="stok" value="<?php echo $stok; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="satuan" class="col-sm-2 col-form-label">Unit</label>
                                                <div class="col-sm-10">
                                                    <select name="satuan" id="satuan" class="form-control">
                                                        <option>Pilih</option>
                                                        <option value="roll" <?php if($satuan == 'roll') {echo "selected";} ?> >ROLL</option>
                                                        <option value="kgs" <?php if($satuan == 'kgs') {echo "selected";} ?> >KGS</option>
                                                        <option value="box" <?php if($satuan == 'box') {echo "selected";} ?> >BOX</option>
                                                        <option value="pcs" <?php if($satuan == 'pcs') {echo "selected";} ?> >PCS</option>
                                                        <option value="pail" <?php if($satuan == 'pail') {echo "selected";} ?> >PAIL</option>
                                                        <option value="zak" <?php if($satuan == 'zak') {echo "selected";} ?> >ZAK</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="col-sm-10">
                                                    <input name="gambar" id="gambar" type="file" class="form-control-file">
<?php if(!empty($gambar)):?>                        <input name="gambar_lama" id="gambar_lama" value="<?php echo $gambar;?>" type="text" style="display: none;">
                                                    <img src="<?php echo $gambar;?>" style="width: 100px;height: 100px;">
<?php endIf;?>
                                                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div>                                            
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary">Kirim </button>
                                                    
                                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_barang/" class="btn btn-secondary">Kembali</a>              
                                                </div>
                                            </div>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $this->load->view("static/footer") ?>
