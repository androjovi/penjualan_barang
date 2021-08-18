<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();
		//Cek jika sudah login, kalau sudah akan dialihkan ke beranda
		if ($this->session->userdata('is_login')!= 1) redirect('Login');
		
  		$this->load->model('Barang_model');
  	}

	public function index()
	{
		
		$data['barang'] = $this->Barang_model->get_barang();
		$this->load->view('barang/index', $data);
	}

	public function tambah()
	{		
		$data = [];

		$data['kd_brg'] = !empty($_POST['kd_brg']) ? $_POST['kd_brg'] : '';
		$data['nm_brg'] = !empty($_POST['nm_brg']) ? $_POST['nm_brg'] : '';
		$data['harga'] = !empty($_POST['harga']) ? $_POST['harga'] : '';
		$data['stok'] = !empty($_POST['stok']) ? $_POST['stok'] : '';
		$data['satuan'] = !empty($_POST['satuan']) ? $_POST['satuan'] : '';
		$data['gambar'] = !empty($_FILES['gambar']) ? $_FILES['gambar'] : '';
		$data['type'] = 'tambah';

		if (!empty($_POST)){

			$config['upload_path'] = 'assets/uploads/'; 
	        $config['allowed_types'] = 'gif|jpg|png'; 
	        $now = date('Y-m-d-H-i-s'); 
	        $config['file_name'] = $now.'.png'; 
	        $config['max_size'] = 0; 
	        // $config['max_width'] = 1024; 
	        // $config['max_height'] = 768; 
	        $this->load->library('upload', $config); 
	        $this->upload->initialize($config); 
	        if ( ! $this->upload->do_upload('gambar')) { 
	            $error = array('error' => $this->upload->display_errors()); 
	            print_r($error);
	            $this->load->view('barang/tampil_brg');

	        } else { 
	            $upload_data = array('upload_data' => $this->upload->data()); 
	        }     

	        $data['gambar'] = base_url().$config['upload_path'].$config['file_name'];
	        
	        $get_barang = $this->Barang_model->tambah_barang($data);
		    
		    if ($get_barang['ERROR_CODE'] == "EC:0000"){
		    	
		    	redirect('/data_barang');
		    } else {
			    echo $get_barang['MESSAGE_ERROR'];
		    	$this->load->view('barang/tampil_brg', $data);	
		    }
	     } else {
	    	$this->load->view('barang/tampil_brg', $data); 	
	     }	

	}

	public function ubah(){
		$results['kd_brg'] = !empty($_GET['kd_brg']) ? $_GET['kd_brg'] : '';
		$get_barang = $this->Barang_model->view_brg($results);

		$data['kd_brg'] = !empty($get_barang['kd_brg']) ? $get_barang['kd_brg'] : $_POST['kd_brg'];
		$data['nm_brg'] = !empty($get_barang['nm_brg']) ? $get_barang['nm_brg'] : $_POST['nm_brg'];
		$data['harga'] = !empty($get_barang['harga']) ? $get_barang['harga'] : $_POST['harga'];
		$data['stok'] = !empty($get_barang['stok']) ? $get_barang['stok'] : $_POST['stok'];
		$data['satuan'] = !empty($get_barang['satuan']) ? $get_barang['satuan'] : $_POST['satuan'];
		$data['gambar'] = !empty($get_barang['gambar']) ? $get_barang['gambar'] : '';
		$data['gambar_lama'] = !empty($_POST['gambar_lama']) ? $_POST['gambar_lama'] : '';
		$data['type'] = 'ubah';

		if (!empty($_POST)) {    
			if(!empty($_FILES['gambar']['name'])) {
				$config['upload_path'] = 'assets/uploads/'; 
		        $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		        $now = date('Y-m-d-H-i-s'); 
		        $config['file_name'] = $now.'.png'; 
		        $config['max_size'] = 0; 
		        // $config['max_width'] = 1024; 
		        // $config['max_height'] = 768; 
		        $this->load->library('upload', $config); 
		        $this->upload->initialize($config); 
		        if ( ! $this->upload->do_upload('gambar')) { 
		            $error = array('error' => $this->upload->display_errors()); 
		            print_r($error);die();
		            $this->load->view('barang/tampil_brg');

		        } else { 
		            $upload_data = array('upload_data' => $this->upload->data()); 
		            echo "<script>alert('Data Telah Ditambah')</script>";  
		        }     

		        $data['gambar'] = base_url().$config['upload_path'].$config['file_name'];

			}
	        $get_barang = $this->Barang_model->ubah_barang($data);
		    if ($get_barang['ERROR_CODE'] == "EC:0000"){
				$this->session->set_flashdata('succ_mesg','Data Berhasil diubah');
		    	redirect('data_barang');
		    } else {
			    echo $get_barang['MESSAGE_ERROR'];
		    	$this->load->view('barang/tampil_brg', $data);	
		    }

		} else {
			$this->load->view('barang/tampil_brg', $data);

		}

	}

	public function hapus() {
		$results['kd_brg'] = !empty($_GET['kd_brg']) ? $_GET['kd_brg'] : '';
		$get_barang = $this->Barang_model->delete_brg($results);

		redirect('/data_barang');
	}
}
