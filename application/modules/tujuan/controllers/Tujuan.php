<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Tujuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_menu', 'm');
	}

	function indikator() {

		//log
		$id = @$this->session->userdata('siswa_id');
		$judul = 'indikator';
		$menu = 'tujuan';

		$this->template->log(@$id, $menu, $judul);

		$menu = $this->m->get_menu('4');
		$data['content'] = $menu->row('menu_detail');
		$data['banner'] = $menu->row('menu_foto');
		$data['side_banner'] = 'home-tujuan-indikator.jpg';
		$this->template->blog($data);
	} 

	function tujuan_pembelajaran() {

		//log
		$id = @$this->session->userdata('siswa_id');
		$judul = 'tujuan pembelajaran';
		$menu = 'tujuan';

		$this->template->log(@$id, $menu, $judul);

		$menu = $this->m->get_menu('3');
		$data['content'] = $menu->row('menu_detail');
		$data['banner'] = $menu->row('menu_foto');
		$data['side_banner'] = 'home-tujuan-pembelajaran.jpg';
		$this->template->blog($data);
	} 
}