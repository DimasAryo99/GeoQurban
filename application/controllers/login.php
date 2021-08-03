<?php

class Login extends CI_Controller
{ //ci_controler class untuk contrlernya

	function __construct()
	{ //construct disitu nanti yang bakal di jalanin 
		parent::__construct();
		$this->load->model('m_login'); // dikomentarin dulu soalnya mau test view

	}

	function index()
	{
		$this->load->view('auth/login');
	}

	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => ($password)
		);
		$cek = $this->m_login->cek_login("admin", $where)->num_rows();
		// print_r($cek);
		if ($cek > 0) {
			// $get["data_login"] = $this->m_login->get_data_login("admin", $where);

			// print_r($get);

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			// $this->load->view("admin/dashboard_admin", $get);
			redirect("admin/dashboard_admin");
		} else {
			$get["data_login"] = $this->m_login->get_data_login("admin");
			$get["username"] = $username;
			$get["password"] = $password;

			// print_r($get);
			// echo "<script>alert('Username dan Pasword Salah!');</script>";
			
			$this->load->view("auth/login", $get);
		}
	}

	// public function get_data(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => ($password)
	// 	);
		
	// 	$get = $this->m_login->get_data_login("admin", $where);

	// 	print_r($get);
	// }

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('login/index');
	}
	// public function logout()
	// {
	//     $this->session->unset_userdata('username');
	//     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
	//     redirect('login');
	// }
}
