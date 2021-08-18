<?php
class Brg_masuk extends CI_Model{

  function __construct()
  {
    parent::__construct();
  }

  public function get_brgmasuk()
  {
    $query = $this 
    ->db
    ->query ('SELECT kd_masuk, tgl_masuk, kd_brg, id_supp, jml_masuk FROM brg_masuk Order by created_date asc');

    $data = $query->result_array();

    return $data;
  }

  public function tambah_brgmasuk($params)
  {
    // fungsi insert barang masuk
    $query = $this 
    ->db
    ->query ('INSERT into brg_masuk (kd_masuk, tgl_masuk, kd_brg, id_supp, jml_masuk,created_by, created_date) values("'.$params["kd_masuk"].'", "'.$params["tgl_masuk"].'", "'.$params["kd_brg"].'","'.$params["id_supp"].'", "'.$params["jml_masuk"].'", 1, now()) ');
    // fungsi insert barang masuk
  
      // fungsi update stok barang      
      $update_stok = $this 
      ->db
      ->query ('UPDATE t_barang SET stok='.$params["jml_stok"].', modified_by=1, modified_date=now() WHERE kd_brg = "'.$params["kd_brg"].'" ');
      // fungsi update stok barang      
      
    $this->db->trans_complete();

        if ($this->db->trans_status() === false)
        {
            $data['ERROR_CODE'] = "EC:00Q3";
            $data['MESSAGE_ERROR'] = "Failed to save data";
        } 
        else 
        {
            $data['ERROR_CODE'] = "EC:0000";
            $data['MESSAGE_ERROR'] = "Success";
        }
        return $data;
  }

  public function view_brgmasuk($params)
  {
    $query = $this 
    ->db
    ->query ('SELECT 
          brg_masuk.kd_masuk, brg_masuk.tgl_masuk, brg_masuk.kd_brg, brg_masuk.id_supp, brg_masuk.jml_masuk,
          t_barang.`stok`
        FROM brg_masuk
        JOIN t_barang on t_barang.kd_brg=brg_masuk.kd_brg
        WHERE kd_masuk="'.$params["kd_masuk"].'"
        order by brg_masuk.created_date asc');

    $data = $query->row_array();

    return $data;
  }


  public function delete_brgmasuk($params) {
    
    // fungsi untuk get jml_masuk & stok barang
    $query_get_jml_masuk = $this 
    ->db
    ->query ('SELECT 
          brg_masuk.kd_brg,
          brg_masuk.jml_masuk,
          t_barang.`stok`
        FROM brg_masuk
        JOIN t_barang on t_barang.kd_brg=brg_masuk.kd_brg
        WHERE kd_masuk="'.$params["kd_masuk"].'"
        order by brg_masuk.created_date asc');
    $get_jml_masuk = $query_get_jml_masuk->row_array();
    // fungsi untuk get jml_masuk & stok barang

    // fungsi menhitung jumlah stok barang
    $total_stok = $get_jml_masuk['stok'] - $get_jml_masuk['jml_masuk'];

    // fungsi untuk update stok barang yg akan dihapus
    $query_update_stok = $this 
      ->db
      ->query ('UPDATE t_barang SET stok='.$total_stok.', modified_by=1, modified_date=now() WHERE kd_brg = "'.$get_jml_masuk["kd_brg"].'" ');
    // fungsi untuk update stok barang yg akan dihapus

    // fungsi untuk menghapus barang masuk
    $query_delete = $this 
    ->db
    ->query ('DELETE FROM brg_masuk  WHERE kd_masuk = "'.$params["kd_masuk"].'" ');
    $this->db->trans_complete();
    // fungsi untuk menghapus barang masuk

    if ($this->db->trans_status() === false)
    {
        $data['ERROR_CODE'] = "EC:00Q3";
        $data['MESSAGE_ERROR'] = "Failed to delete data";
    } 
    else 
    {
        $data['ERROR_CODE'] = "EC:0000";
        $data['MESSAGE_ERROR'] = "Success";
    }
    return $data;
  }

  public function get_stok_barang($params)
  {

    $query = $this->db->query ('SELECT kd_brg, nm_brg, stok FROM t_barang WHERE kd_brg="'.$params["kd_brg"].'" ');

    $data = $query->row_array();

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // exit();

    return $data;
  }
}
 