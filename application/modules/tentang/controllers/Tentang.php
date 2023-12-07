<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Tentang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu', 'm');
	}

	function index() {
		$menu = $this->m->get_menu('5');
		$data['content'] = $menu->row('menu_detail');
		$data['banner'] = $menu->row('menu_foto');
		$data['side_banner'] = 'home-banner.jpg';

		//log
		$id = @$this->session->userdata('siswa_id');
		$judul = 'tentang';
		$menu = 'tentang';

		$this->template->log(@$id, $menu, $judul);

		$this->template->blog($data);
	}
}