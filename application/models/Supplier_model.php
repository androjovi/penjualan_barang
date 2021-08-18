<?php
class Supplier_model extends CI_Model{

  function __construct()
  {
    parent::__construct();
  }

  public function get_supplier()
  {
    $query = $this 
    ->db
    ->query ('SELECT id_supp, nm_supp, telp_supp, alamat_supp FROM t_supplier Order by created_date asc');

    $data = $query->result_array();

    return $data;
  }

  public function tambah_supplier($params)
  {

  // echo "<pre>";
  // print_r($params);
  // echo "</pre>";
  // exit();

    $query = $this 
    ->db
    ->query ('INSERT into t_supplier (id_supp, nm_supp, telp_supp, alamat_supp, created_by, created_date) values("'.$params["id_supp"].'", "'.$params["nm_supp"].'", "'.$params["telp_supp"].'","'.$params["alamat_supp"].'", 1, now()) ');
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

  public function view_supplier($params)
  {
    $query = $this 
    ->db
    ->query ('SELECT id_supp, nm_supp, telp_supp, alamat_supp FROM t_supplier WHERE id_supp="'.$params["id_supp"].'" order by created_date asc');

    $data = $query->row_array();

    return $data;
  }

  public function ubah_supplier($params)
  {
    $query = $this 
    ->db
    ->query ('UPDATE t_supplier SET nm_supp="'.$params["nm_supp"].'", telp_supp="'.$params["telp_supp"].'", alamat_supp="'.$params["alamat_supp"].'" WHERE id_supp = "'.$params["id_supp"].'" ');
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

  public function delete_supplier($params) {
    $query = $this 
    ->db
    ->query ('DELETE FROM t_supplier  WHERE id_supp = "'.$params["id_supp"].'" ');
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
 