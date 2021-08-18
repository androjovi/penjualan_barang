<?php
class Brg_keluar extends CI_Model{

  function __construct()
  {
    parent::__construct();
  }

  public function get_brgkeluar()
  {
    $query = $this 
    ->db
    ->query ('SELECT kd_keluar, tgl_keluar, kd_brg, id_pel, jml_keluar FROM brg_keluar Order by created_date asc');

    $data = $query->result_array();

    return $data;
  }

  public function tambah_brgkeluar($params)
  {
    // fungsi insert barang keluar
    $query = $this 
    ->db
    ->query ('INSERT into brg_keluar (kd_keluar, tgl_keluar, kd_brg, id_pel, jml_keluar, created_by, created_date) values("'.$params["kd_keluar"].'", "'.$params["tgl_keluar"].'", "'.$params["kd_brg"].'","'.$params["id_pel"].'", "'.$params["jml_keluar"].'",  1, now()) ');
    // fungsi insert barang keluar
  
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

  public function view_brgkeluar($params)
  {
    $query = $this 
    ->db
    ->query ('SELECT 
          brg_keluar.kd_keluar, brg_keluar.tgl_keluar, brg_keluar.kd_brg, brg_keluar.id_pel, brg_keluar.jml_keluar, 
          t_barang.`stok`
        FROM brg_keluar
        JOIN t_barang on t_barang.kd_brg=brg_keluar.kd_brg
        WHERE kd_keluar="'.$params["kd_keluar"].'"
        order by brg_keluar.created_date asc');

    $data = $query->row_array();

    return $data;
  }

  public function delete_brgkeluar($params) {
    
    // fungsi untuk get jml_keluar & stok barang
    $query_get_jml_keluar = $this 
    ->db
    ->query ('SELECT 
          brg_keluar.kd_brg,
          brg_keluar.jml_keluar,
          t_barang.`stok`
        FROM brg_keluar
        JOIN t_barang on t_barang.kd_brg=brg_keluar.kd_brg
        WHERE kd_keluar="'.$params["kd_keluar"].'"
        order by brg_keluar.created_date asc');
    $get_jml_keluar = $query_get_jml_keluar->row_array();
    // fungsi untuk get jml_keluar & stok barang

    // fungsi menhitung jumlah stok barang
    $total_stok = $get_jml_keluar['stok'] - $get_jml_keluar['jml_keluar'];

    // fungsi untuk update stok barang yg akan dihapus
    $query_update_stok = $this 
      ->db
      ->query ('UPDATE t_barang SET stok='.$total_stok.', modified_by=1, modified_date=now() WHERE kd_brg = "'.$get_jml_keluar["kd_brg"].'" ');
    // fungsi untuk update stok barang yg akan dihapus

    // fungsi untuk menghapus barang keluar
    $query_delete = $this 
    ->db
    ->query ('DELETE FROM brg_keluar  WHERE kd_keluar = "'.$params["kd_keluar"].'" ');
    $this->db->trans_complete();
    // fungsi untuk menghapus barang keluar

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
 