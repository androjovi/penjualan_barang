<?php $this->load->view("static/header") ?>
<?php $this->load->view("static/leftbar") ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Data Barang Masuk</h5>
                                        <div class="row">
                                            
                                            <div class="col-lg-6">
                                                <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_masuk/tambah" class="mb-2 mr-2 btn btn-primary" style="text-align:right;">Tambah</a>

                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="tbl_bm" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>KODE PO</th>
                                                        <th>TGL MASUK</th>
                                                        <th>SUPPLIER</th>
                                                        <th>BARANG</th>
                                                        <th>JUMLAH MASUK</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
<?php 
$no = 1;
foreach ($brg_masuk as $key => $value):
?>
                                                    <tr>
                                                        <th scope="row"><?php echo $no;?></th>
                                                        <td><?php echo $value['kd_masuk'];?></td>
                                                        <td><?php echo $value['tgl_masuk'];?></td>
                                                        <td><?php echo $value['id_supp'];?></td>
                                                        <td><?php echo $value['kd_brg'];?></td>
                                                        <td><?php echo $value['jml_masuk'];?></td>
                                                        <td>
                                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_masuk/ubah?kd_masuk=<?php echo $value['kd_masuk'];?>" style="display: none">
                                                            <button >Edit</button></a> 
                                                            <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/data_masuk/hapus?kd_masuk=<?php echo $value['kd_masuk'];?>">
                                                            <button>Hapus</button></a>
                                                        </td>
                                                    </tr> 
<?php 
$no++;
endforeach;
?>                                               
                                                </tbody>
                                                <tfoot>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Total Barang Masuk</th>
                                                    <th></th>
                                                    <th></th>
                                                </tfoot>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl_bm').DataTable({
            "footerCallback" : function ( row, data, start, end, display ) {
        var api = this.api();
        nb_cols = api.columns().nodes().length;
        var j = 5;
        //what the heck is this
        var intVal = function ( i ) {
            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
        };
        while(j < nb_cols){
          var pageTotal = api
                .column( j, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                  sot = intVal(a) + intVal(b)
                  return sot.toLocaleString();
                }, 0 );
          // Update footer
          $( api.column( j ).footer() ).html(pageTotal);
          j++;
          if (j == 6){
              break
          }
        }
      }

        });
    } );
</script>

