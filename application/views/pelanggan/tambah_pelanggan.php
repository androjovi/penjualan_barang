<?php $this->load->view("static/header") ?>
<?php $this->load->view("static/leftbar") ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                   <div class="card-body"><h5 class="card-title">Tambahkan Pelanggan</h5>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>data_pelanggan/<?php echo $type;?>">
                                            <div class="position-relative row form-group"><label for="id_pel" class="col-sm-2 col-form-label">ID</label>
                                                <div class="col-sm-10"><input name="id_pel" id="id_pel" value="<?php echo $id_pel; ?>" placeholder="with a placeholder" type="kode" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nm_pel" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10"><input name="nm_pel" id="nm_pel" value="<?php echo $nm_pel; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="telp_pel" class="col-sm-2 col-form-label">Telepon</label>
                                                <div class="col-sm-10"><input name="telp_pel" id="telp_pel" value="<?php echo $telp_pel; ?>" type="number" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="alamat_pel" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10"><textarea name="alamat_pel" id="alamat_pel" class="form-control"> <?php echo $alamat_pel; ?> </textarea></div>
                                            </div>
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary">Kirim</button>

                                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_pelanggan" class="btn btn-secondary">Kembali</a>              
                                                </div>
                                            </div>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php $this->load->view("static/footer") ?>