<?php
class Barang_model extends CI_Model{

  function __construct()
  {
    parent::__construct();
  }

  public function get_barang()
  {
    $query = $this 
    ->db
    ->query ('SELECT kd_brg, nm_brg, harga, stok, satuan, gambar FROM t_barang order by created_date asc');

    $data = $query->result_array();

    return $data;
  }

  public function tambah_barang($params)
  {
    $query = $this 
    ->db
    ->query ('INSERT into t_barang (kd_brg, nm_brg, harga, stok, satuan, gambar, created_by, created_date, modified_by, modified_date) values("'.$params["kd_brg"].'", "'.$params["nm_brg"].'", '.$params["harga"].','.$params["stok"].', "'.$params["satuan"].'", "'.$params["gambar"].'", 1, now(), 1, now()) ');
    $this->db->trans_complete();
        if ($this->db->trans_status() === false)
        {
            
            // $data['MESSAGE_ERROR'] = "Failed to save data";
            echo "<script>alert('Data gagal di tambahkan!');</script>";
            $data['ERROR_CODE'] = "EC:00Q3";
        } 
        else 
        {

            
            // $data['MESSAGE_ERROR'] = "Success";
            echo "<script>alert('Data berhasil di tambahkan!');</script>";
            $data['ERROR_CODE'] = "EC:0000";
        }
        return $data;
  }

  public function view_brg($params)
  {
    $query = $this 
    ->db
    ->query ('SELECT kd_brg, nm_brg, harga, stok, satuan, gambar FROM t_barang WHERE kd_brg="'.$params["kd_brg"].'" order by created_date asc');

    $data = $query->row_array();

    return $data;
  }

  public function ubah_barang($params)
  {
    $query = $this 
    ->db
    ->query ('UPDATE t_barang SET nm_brg="'.$params["nm_brg"].'", harga='.$params["harga"].', stok='.$params["stok"].', satuan="'.$params["satuan"].'", gambar="'.$params["gambar"].'", modified_by=1, modified_date=now() WHERE kd_brg = "'.$params["kd_brg"].'" ');
    $this->db->trans_complete();
        if ($this->db->trans_status() === false)
        {
            
            // $data['MESSAGE_ERROR'] = "Failed to update data";
            echo "<script>alert('Data gagal di ubah!');</script>";
            $data['ERROR_CODE'] = "EC:00Q3";
        } 
        else 
        {
            
            // $data['MESSAGE_ERROR'] = "Success";
          echo "<script>alert('Data berhasil di ubah!');</script>";
          $data['ERROR_CODE'] = "EC:0000";

        }
        return $data;
  }

  public function delete_brg($params) {
    $query = $this 
    ->db
    ->query ('DELETE FROM t_barang  WHERE kd_brg = "'.$params["kd_brg"].'" ');
    $this->db->trans_complete();
        if ($this->db->trans_status() === false)
        {
            // $data['ERROR_CODE'] = "EC:00Q3";
            // $data['MESSAGE_ERROR'] = "Failed to delete data";
            echo "<script>alert('Data gagal di hapus!');</script>";
        } 
        else 
        {
            // $data['ERROR_CODE'] = "EC:0000";
            // $data['MESSAGE_ERROR'] = "Success";
          echo "<script>alert('Data berhasil di hapus!');</script>";
        }
        return $data;
  }
}
