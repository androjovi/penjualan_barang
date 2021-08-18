<?php
class Pegawai_model extends CI_Model{

  function __construct()
  {
    parent::__construct();
  }

  public function get_pegawai()
  {
    $query = $this 
    ->db
    ->query ('SELECT id, nama, jenis_kelamin, jabatan, hak_akses, no_telp, alamat, email, password FROM t_pegawai Order by created_date asc');

    $data = $query->result_array();

    return $data;
  }

  public function tambah_pegawai($params)
  {

  // echo "<pre>";
  // print_r($params);
  // echo "</pre>";
  // exit();

    $query = $this 
    ->db
    ->query ('INSERT into t_pegawai (id, nama, jenis_kelamin, jabatan, hak_akses, no_telp, alamat, email, password created_by, created_date) values("'.$params["id"].'", "'.$params["nama"].'", "'.$params["jenis_kelamin"].'", "'.$params["jabatan"].'", "'.$params["hak_akses"].'", "'.$params["no_telp"].'", "'.$params["alamat"].'", "'.$params["email"].'", "'.$params["password"].'", 1, now()) ');
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

  public function view_pegawai($params)
  {
    $query = $this 
    ->db
    ->query ('SELECT id, nama, jenis_kelamin, jabatan, hak_akses, no_telp, alamat, email, password FROM t_pegawai WHERE id="'.$params["id"].'" order by created_date asc');

    $data = $query->row_array();

    return $data;
  }

  public function ubah_pegawai($params)
  {
    $query = $this 
    ->db
    ->query ('UPDATE t_pegawai SET nama="'.$params["nama"].'", jenis_kelamin="'.$params["jenis_kelamin"].'", jabatan="'.$params["jabatan"].'", hak_akses="'.$params["hak_akses"].'", no_telp="'.$params["no_telp"].'", alamat="'.$params["alamat"].'", email="'.$params["email"].'", password="'.$params["password"].'" WHERE id = "'.$params["id"].'" ');
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

  public function delete_pegawai($params) {
    $query = $this 
    ->db
    ->query ('DELETE FROM t_pegawai  WHERE id = "'.$params["id"].'" ');
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
 