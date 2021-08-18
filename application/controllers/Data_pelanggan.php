<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pelanggan extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
		//Cek jika sudah login, kalau sudah akan dialihkan ke beranda
		if ($this->session->userdata('is_login')!= 1) redirect('Login');
  		$this->load->model('Pelanggan_model');
  	}

	public function index()

	{
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // exit();
		$data['pelanggan'] = $this->Pelanggan_model->get_pelanggan();
		$this->load->view('pelanggan/pelanggan', $data);

	}

	public function tambah()
	{		


		$data = [];

		$data['id_pel'] = !empty($_POST['id_pel']) ? $_POST['id_pel'] : '';
		$data['nm_pel'] = !empty($_POST['nm_pel']) ? $_POST['nm_pel'] : '';
		$data['telp_pel'] = !empty($_POST['telp_pel']) ? $_POST['telp_pel'] : '';
		$data['alamat_pel'] = !empty($_POST['alamat_pel']) ? $_POST['alamat_pel'] : '';

	
		$data['type'] = 'tambah';
	    if (!empty($_POST))
	    {
	        $get_pelanggan = $this->Pelanggan_model->tambah_pelanggan($data);
		    
		    if ($get_pelanggan['ERROR_CODE'] == "EC:0000"){
		    	redirect('/data_pelanggan');
		    } else {
			    echo $get_pelanggan['MESSAGE_ERROR'];
		    	$this->load->view('pelanggan/pelanggan', $data);	
		    }
		}
		else 
		{
			$this->load->view('pelanggan/tambah_pelanggan', $data );
		}
	}

	public function ubah()
	{
		$results['id_pel'] = !empty($_GET['id_pel']) ? $_GET['id_pel'] : '';
		$get_pelanggan = $this->Pelanggan_model->view_pelanggan($results);
		$data['id_pel'] = !empty($get_pelanggan['id_pel']) ? $get_pelanggan['id_pel'] : $_POST['id_pel'];
		$data['nm_pel'] = !empty($get_pelanggan['nm_pel']) ? $get_pelanggan['nm_pel'] : $_POST['nm_pel'];
		$data['telp_pel'] = !empty($get_pelanggan['telp_pel']) ? $get_pelanggan['telp_pel'] : $_POST['telp_pel'];
		$data['alamat_pel'] = !empty($get_pelanggan['alamat_pel']) ? $get_pelanggan['alamat_pel'] : $_POST['alamat_pel'];
		$data['type'] = 'ubah';
	
	if (!empty($_POST))
	    {
	        $get_pelanggan = $this->Pelanggan_model->ubah_pelanggan($data);
		    
		    if ($get_pelanggan['ERROR_CODE'] == "EC:0000"){
		    	redirect('/data_pelanggan');
		    } else {
			    echo $get_pelanggan['MESSAGE_ERROR'];
		    	$this->load->view('pelanggan/pelanggan', $data);	
		    }
		}
		else 
		{
			$this->load->view('pelanggan/tambah_pelanggan', $data );
		}
	} 

	public function hapus() 
	{
		$results['id_pel'] = !empty($_GET['id_pel']) ? $_GET['id_pel'] : '';
		$get_pelanggan = $this->Pelanggan_model->delete_pelanggan($results);
		redirect('/data_pelanggan');
	}
}
