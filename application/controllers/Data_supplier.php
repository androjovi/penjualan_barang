<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_supplier extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
		//Cek jika sudah login, kalau sudah akan dialihkan ke beranda
		if ($this->session->userdata('is_login')!= 1) redirect('Login');
  		$this->load->model('Supplier_model');
  	}

	public function index()

	{
  
		$data['supplier'] = $this->Supplier_model->get_supplier();
		$this->load->view('supplier/supplier', $data);

	}

	public function tambah()
	{		


		$data = [];

		$data['id_supp'] = !empty($_POST['id_supp']) ? $_POST['id_supp'] : '';
		$data['nm_supp'] = !empty($_POST['nm_supp']) ? $_POST['nm_supp'] : '';
		$data['telp_supp'] = !empty($_POST['telp_supp']) ? $_POST['telp_supp'] : '';
		$data['alamat_supp'] = !empty($_POST['alamat_supp']) ? $_POST['alamat_supp'] : '';

	
		$data['type'] = 'tambah';
	    if (!empty($_POST))
	    {
	        $get_supplier = $this->Supplier_model->tambah_supplier($data);
		    
		    if ($get_supplier['ERROR_CODE'] == "EC:0000"){
		    	redirect('/data_supplier');
		    } else {
			    echo $get_supplier['MESSAGE_ERROR'];
		    	$this->load->view('supplier/supplier', $data);	
		    }
		}
		else 
		{
			$this->load->view('supplier/tambah_supplier', $data );
		}
	}

	public function ubah()
	{
		$results['id_supp'] = !empty($_GET['id_supp']) ? $_GET['id_supp'] : '';
		$get_supplier = $this->Supplier_model->view_supplier($results);	
// echo "<pre>";
//   print_r($_POST);
//   echo "</pre>";
//   exit();
		$data['id_supp'] = !empty($get_supplier['id_supp']) ? $get_supplier['id_supp'] : $_POST['id_supp'];
		$data['nm_supp'] = !empty($get_supplier['nm_supp']) ? $get_supplier['nm_supp'] : $_POST['nm_supp'];
		$data['telp_supp'] = !empty($get_supplier['telp_supp']) ? $get_supplier['telp_supp'] : $_POST['telp_supp'];
		$data['alamat_supp'] = !empty($get_supplier['alamat_supp']) ? $get_supplier['alamat_supp'] : $_POST['alamat_supp'];
		$data['type'] = 'ubah';
	
	if (!empty($_POST))
	    {
	        $get_supplier = $this->Supplier_model->ubah_supplier($data);
		    
		    if ($get_supplier['ERROR_CODE'] == "EC:0000"){
		    	redirect('/data_supplier');
		    } else {
			    echo $get_supplier['MESSAGE_ERROR'];
		    	$this->load->view('pelanggan/pelanggan', $data);	
		    }
		}
		else 
		{
			$this->load->view('supplier/tambah_supplier', $data);			
		}
	} 

	public function hapus() 
	{
		$results['id_supp'] = !empty($_GET['id_supp']) ? $_GET['id_supp'] : '';
		$get_supplier = $this->Supplier_model->delete_supplier($results);
		redirect('/data_supplier');
	}
}
