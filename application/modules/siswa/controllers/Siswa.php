<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login', 'm');
	}

	function index() {
		$this->isLogin();
		redirect('siswa/login','refresh');
	}

	function login() {
		$this->isLogin();
		$this->load->view('login');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('siswa/login','refresh');
	}

	function login_post() {
		$email = $this->input->post("email");
		$pass = $this->input->post("password");
		$login = $this->m->get_auth($email, $pass);
		if ($login) {
			redirect(base_url(),'refresh');
		} else {
			redirect('siswa/login','refresh');
		}
	}

	function isLogin() {
		$login = $this->session->userdata('login');
  		if ($login == true) {
  			redirect(base_url(), 'refresh');
  			die();
  		}
	}
}