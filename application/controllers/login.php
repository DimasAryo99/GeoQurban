<?php 
 
class Login extends CI_Controller{ //ci_controler class untuk contrlernya
 
	function __construct(){ //construct disitu nanti yang bakal di jalanin 
 		parent::__construct();		
		$this->load->model('m_login'); // dikomentarin dulu soalnya mau test view
 
	}
 
	function index(){
		$this->load->view('auth/login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => ($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect("admin/dashboard_admin");
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>