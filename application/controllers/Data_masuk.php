<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_masuk extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
		  //Cek jika sudah login, kalau sudah akan dialihkan ke beranda
		if ($this->session->userdata('is_login')!= 1) redirect('Login');
  		$this->load->model('Barang_model');
  		$this->load->model('Brg_masuk');
  		$this->load->model('Supplier_model');
  	}

	public function index()

	{
		$data['brg_masuk'] = $this->Brg_masuk->get_brgmasuk();
		$this->load->view('transaksi/brg_masuk', $data);

	}

	public function tambah()
	{		
		$data = [];
		$data['barang'] = $this->Barang_model->get_barang();
		$data['supplier'] = $this->Supplier_model->get_supplier();

		$data['kd_masuk'] = !empty($_POST['kd_masuk']) ? $_POST['kd_masuk'] : '';
		$data['tgl_masuk'] = !empty($_POST['tgl_masuk']) ? $_POST['tgl_masuk'] : '';
		$data['id_supp'] = !empty($_POST['id_supp']) ? $_POST['id_supp'] : '';
		$data['kd_brg'] = !empty($_POST['kd_brg']) ? $_POST['kd_brg'] : '';
		$data['stok'] = !empty($_POST['stok']) ? $_POST['stok'] : '';
		$data['jml_masuk'] = !empty($_POST['jml_masuk']) ? $_POST['jml_masuk'] : '';
		$data['jml_stok'] = !empty($_POST['jml_stok']) ? $_POST['jml_stok'] : '';
// echo "<pre>";
// 		print_r($data);
// 		echo "</pre>";
// 		exit();
	
		$data['type'] = 'tambah';
	    if (!empty($_POST))
	    {
	        $get_brgmasuk = $this->Brg_masuk->tambah_brgmasuk($data);
		    
		    if ($get_brgmasuk['ERROR_CODE'] == "EC:0000"){
		    	redirect('/data_masuk');
		    } else {
			    echo $get_brgmasuk['MESSAGE_ERROR'];
		    	$this->load->view('transaksi/tambah_bm', $data);	
		    }
		}
		else 
		{
			$this->load->view('transaksi/tambah_bm', $data );
		}
	}


	public function hapus() 
	{
		$results['kd_masuk'] = !empty($_GET['kd_masuk']) ? $_GET['kd_masuk'] : '';
		$get_brgmasuk = $this->Brg_masuk->delete_brgmasuk($results);
		redirect('/data_masuk');
	}


	public function get_stok_barang()
	{
		if ($_POST != '') {
			$get_stok_barang = $this->Brg_masuk->get_stok_barang($_POST);
			echo json_encode($get_stok_barang);
		}
	}
}
