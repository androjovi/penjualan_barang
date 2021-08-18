<?php
class Pelanggan_model extends CI_Model{

  function __construct()
  {
    parent::__construct();
  }

  public function get_pelanggan()
  {
    $query = $this 
    ->db
    ->query ('SELECT id_pel, nm_pel, telp_pel, alamat_pel FROM t_pelanggan Order by created_date asc');

    $data = $query->result_array();

    return $data;
  }

  public function tambah_pelanggan($params)
  {

  // echo "<pre>";
  // print_r($params);
  // echo "</pre>";
  // exit();

    $query = $this 
    ->db
    ->query ('INSERT into t_pelanggan (id_pel, nm_pel, telp_pel, alamat_pel, created_by, created_date) values("'.$params["id_pel"].'", "'.$params["nm_pel"].'", "'.$params["telp_pel"].'","'.$params["alamat_pel"].'", 1, now()) ');
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

  public function view_pelanggan($params)
  {
    $query = $this 
    ->db
    ->query ('SELECT id_pel, nm_pel, telp_pel, alamat_pel FROM t_pelanggan WHERE id_pel="'.$params["id_pel"].'" order by created_date asc');

    $data = $query->row_array();

    return $data;
  }

  public function ubah_pelanggan($params)
  {
    $query = $this 
    ->db
    ->query ('UPDATE t_pelanggan SET nm_pel="'.$params["nm_pel"].'", telp_pel="'.$params["telp_pel"].'", alamat_pel="'.$params["alamat_pel"].'" WHERE id_pel = "'.$params["id_pel"].'" ');
    $this->db->trans_complete();
        if ($this->db->trans_status() === false)
        {
            $data['ERROR_CODE'] = "EC:00Q3";
            $data['MESSAGE_ERROR'] = "Failed to update data";
        } 
        else 
        {
            $data['ERROR_CODE'] = "EC:0000";
            $data['MESSAGE_ERROR'] = "Success";
        }
        return $data;
  }

  public function delete_pelanggan($params) {
    $query = $this 
    ->db
    ->query ('DELETE FROM t_pelanggan  WHERE id_pel = "'.$params["id_pel"].'" ');
    $this->db->trans_complete();
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
}
 