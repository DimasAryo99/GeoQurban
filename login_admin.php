<?php

class Login_Admin extends CI_Controller
{ //ci_controler class untuk contrlernya

	function __construct()
	{ //construct disitu nanti yang bakal di jalanin 
		parent::__construct();
		$this->load->model('m_login'); // dikomentarin dulu soalnya mau test view

	}

	function index()
	{
		$this->load->view('auth/login_admin');
	}

	function aksilogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => ($password)
		);
		$cek = $this->m_login->cek_login("admin", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login_admin"
			);

			$this->session->set_userdata($data_session);

			redirect("admin/dashboard_admin");
		} else {
			echo "<script>alert('Username dan Pasword Salah!');</script>";
			redirect('login_admin', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('login_admin/index');
	}
	// public function logout()
	// {
	//     $this->session->unset_userdata('username');
	//     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
	//     redirect('login');
	// }
}
