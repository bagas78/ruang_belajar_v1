<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_log extends CI_Model
{
	function get_log() {
		$db = $this->db;
		$db = $this->db->join('t_siswa', 't_siswa.siswa_id = t_log.log_siswa', 'left');
		$db = $this->db->get('t_log')->result_array();
		return $db;
	}
}