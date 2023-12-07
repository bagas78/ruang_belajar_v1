<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class M_login extends CI_Model
{
	function get_auth($email, $pass) {
		$db = $this->db->where("siswa_id", $email);
		$db = $this->db->where("siswa_password", md5($pass));
		$db = $this->db->get("t_siswa");
		if ($db->num_rows() > 0) {
			$data = $db->row_array();
			$data['login'] = true;
			$data['login_siswa'] = true;
			$data['siswa_id'] = $email;
			unset($data['user_password']);
			$this->session->set_userdata( $data );
			return true;
		} else {
			$this->session->set_flashdata('fail', 'y');
			return false;
		}
	}
}