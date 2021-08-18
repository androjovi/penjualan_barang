<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
  		$this->load->model('Login_model');

		if ($this->session->userdata('is_login') == 1){
			//redirect("Welcome");
		}
	}


	public function index()
	{
		//Cek jika sudah login, kalau sudah akan dialihkan ke beranda
		if ($this->session->userdata('is_login') == 1) redirect('Welcome');
		
		$this->load->view('login/login.php');
	}

	function login_process(){
		
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$data = $this->Login_model->cklogin($email, $password);

		// Cek login kalau berhasil, jika tidak berhasil blok if akan dilewatkan
		if ($data){
			$this->session->set_userdata('is_login', 1);
			redirect("Welcome");
		}

		redirect("Login");
		$this->session->set_flashdata('err_mesg', 'Email atau password yang anda masukkan salah');
	}

	function logout_process(){
		$this->session->set_userdata('is_login', 0);
		$this->session->sess_destroy();
		redirect("Login");
	}
}
