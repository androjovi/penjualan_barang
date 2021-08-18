<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
		//Cek jika sudah login, kalau sudah akan dialihkan ke beranda
		if ($this->session->userdata('is_login')!= 1) redirect('Login');
  		$this->load->model('Pegawai_model');
  	}

	public function index()

	{
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // exit();
		$data['pegawai'] = $this->Pegawai_model->get_pegawai();
		$this->load->view('pegawai/pegawai', $data);

	}

	public function tambah()
	{		


		$data = [];

		$data['id'] = !empty($_POST['id']) ? $_POST['id'] : '';
		$data['nama'] = !empty($_POST['nama']) ? $_POST['nama'] : '';
		$data['jenis_kelamin'] = !empty($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
		$data['jabatan'] = !empty($_POST['jabatan']) ? $_POST['jabatan'] : '';
		$data['hak_akses'] = !empty($_POST['hak_akses']) ? $_POST['hak_akses'] : '';
		$data['no_telp'] = !empty($_POST['no_telp']) ? $_POST['no_telp'] : '';
		$data['alamat'] = !empty($_POST['alamat']) ? $_POST['alamat'] : '';
		$data['email'] = !empty($_POST['email']) ? $_POST['email'] : '';
		$data['password'] = !empty($_POST['password']) ? $_POST['password'] : '';

	
		$data['type'] = 'tambah';
	    if (!empty($_POST))
	    {
	        $get_pegawai = $this->Pegawai_model->tambah_pegawai($data);
		    
		    if ($get_pegawai['ERROR_CODE'] == "EC:0000"){
		    	redirect('/data_pegawai');
		    } else {
			    echo $get_pegawai['MESSAGE_ERROR'];
		    	$this->load->view('pegawai/pegawai', $data);	
		    }
		}
		else 
		{
			$this->load->view('pegawai/tambah_pegawai', $data );
		}
	}

	public function ubah()
	{
		$results['id_pel'] = !empty($_GET['id_pel']) ? $_GET['id_pel'] : '';
		$get_pegawai = $this->Pegawai_model->view_pegawai($results);
		$data['id_pel'] = !empty($get_pegawai['id_pel']) ? $get_pegawai['id_pel'] : $_POST['id_pel'];
		$data['nm_pel'] = !empty($get_pegawai['nm_pel']) ? $get_pegawai['nm_pel'] : $_POST['nm_pel'];
		$data['telp_pel'] = !empty($get_pegawai['telp_pel']) ? $get_pegawai['telp_pel'] : $_POST['telp_pel'];
		$data['alamat_pel'] = !empty($get_pegawai['alamat_pel']) ? $get_pegawai['alamat_pel'] : $_POST['alamat_pel'];
		$data['type'] = 'ubah';
	
	if (!empty($_POST))
	    {
	        $get_pegawai = $this->Pegawai_model->ubah_pegawai($data);
		    
		    if ($get_pegawai['ERROR_CODE'] == "EC:0000"){
		    	redirect('/data_pegawai');
		    } else {
			    echo $get_pegawai['MESSAGE_ERROR'];
		    	$this->load->view('pegawai/pegawai', $data);	
		    }
		}
		else 
		{
			$this->load->view('pegawai/tambah_pegawai', $data );
		}
	} 

	public function hapus() 
	{
		$results['id_pel'] = !empty($_GET['id_pel']) ? $_GET['id_pel'] : '';
		$get_pegawai = $this->Pegawai_model->delete_pegawai($results);
		redirect('/data_pegawai');
	}
}
