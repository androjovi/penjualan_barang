<?php $this->load->view("static/header") ?>
<?php $this->load->view("static/leftbar") ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                   <div class="card-body"><h5 class="card-title">Tambahkan Supplier</h5>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>data_supplier/<?php echo $type;?>">
                                            <div class="position-relative row form-group"><label for="id_supp" class="col-sm-2 col-form-label">ID</label>
                                                <div class="col-sm-10"><input name="id_supp" id="id_supp" value="<?php echo $id_supp; ?>" placeholder="with a placeholder" type="kode" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="nm_supp" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10"><input name="nm_supp" id="nm_supp" value="<?php echo $nm_supp; ?>" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="telp_supp" class="col-sm-2 col-form-label">Telepon</label>
                                                <div class="col-sm-10"><input name="telp_supp" id="telp_supp" value="<?php echo $telp_supp; ?>" type="number" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="alamat_supp" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10"><textarea name="alamat_supp" id="alamat_supp" class="form-control"> <?php echo $alamat_supp; ?> </textarea></div>
                                            </div>
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary">Kirim</button>

                                                    <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_supplier/" class="btn btn-secondary">Kembali</a>              
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