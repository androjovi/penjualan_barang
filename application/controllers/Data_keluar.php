<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_keluar extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
		  //Cek jika sudah login, kalau sudah akan dialihkan ke beranda
		if ($this->session->userdata('is_login')!= 1) redirect('Login');
  		$this->load->model('Barang_model');
  		$this->load->model('Brg_keluar');
  		$this->load->model('Pelanggan_model');
  	}

	public function index()

	{
		$data['brg_keluar'] = $this->Brg_keluar->get_brgkeluar();
		$this->load->view('transaksi/brg_keluar', $data);

	}

	public function tambah()
	{		
		$data = [];
		$data['barang'] = $this->Barang_model->get_barang();
		$data['pelanggan'] = $this->Pelanggan_model->get_pelanggan();

		$data['kd_keluar'] = !empty($_POST['kd_keluar']) ? $_POST['kd_keluar'] : '';
		$data['tgl_keluar'] = !empty($_POST['tgl_keluar']) ? $_POST['tgl_keluar'] : '';
		$data['id_pel'] = !empty($_POST['id_pel']) ? $_POST['id_pel'] : '';
		$data['kd_brg'] = !empty($_POST['kd_brg']) ? $_POST['kd_brg'] : '';
		$data['stok'] = !empty($_POST['stok']) ? $_POST['stok'] : '';		
		$data['jml_keluar'] = !empty($_POST['jml_keluar']) ? $_POST['jml_keluar'] : '';
		$data['jml_stok'] = !empty($_POST['jml_stok']) ? $_POST['jml_stok'] : '';		
// echo "<pre>";
// 		print_r($data);
// 		echo "</pre>";
// 		exit();
	
		$data['type'] = 'tambah';
	    if (!empty($_POST))
	    {
	        $get_brgkeluar = $this->Brg_keluar->tambah_brgkeluar($data);
		    
		    if ($get_brgkeluar['ERROR_CODE'] == "EC:0000"){
		    	redirect('/data_keluar');
		    } else {
			    echo $get_brgkeluar['MESSAGE_ERROR'];
		    	$this->load->view('transaksi/tambah_brgkeluar', $data);	
		    }
		}
		else 
		{
			$this->load->view('transaksi/tambah_brgkeluar', $data );
		}
	}


	public function hapus() 
	{
		$results['kd_keluar'] = !empty($_GET['kd_keluar']) ? $_GET['kd_keluar'] : '';
		$get_brgkeluar = $this->Brg_keluar->delete_brgkeluar($results);
		redirect('/data_keluar');
	}


	public function get_stok_barang()
	{
		if ($_POST != '') {
			$get_stok_barang = $this->Brg_keluar->get_stok_barang($_POST);
			echo json_encode($get_stok_barang);
		}
	}
}
