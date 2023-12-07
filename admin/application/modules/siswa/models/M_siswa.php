<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_siswa extends CI_Model
{
	function get_siswa() {
		$db = $this->db->get('t_siswa')->result_array();
		return $db;
	}

	function insert_data($data) {

		$nim = $data['siswa_id'];
		$nama = $data['siswa_nama'];
		$set = array(
						'siswa_id' => $nim,
						'siswa_nama' => $nama, 
						'siswa_password' => md5($nim),
					);

		$db = $this->db->insert_string('t_siswa', $set). ' ON DUPLICATE KEY UPDATE siswa_nama=\''.$nama.'\'';
		// $db = str_replace('INSERT INTO','INSERT IGNORE INTO',$db);
		$db = $this->db->query($db);
		return $db;
	}

	function delete_data($siswa_id) {
		$db = $this->db->where('siswa_id', $siswa_id);
		$db = $this->db->delete('t_siswa');
		return $db;
	}
}