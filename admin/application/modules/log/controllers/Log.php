<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Log extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_log', 'm');
	}

	public function index() {
		$data['materi'] = $this->m->get_log();
		$this->template->view('index', $data); 
	}
}