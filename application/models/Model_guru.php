<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_guru extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_guru');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_lokasi($where,$table){		
	return $this->db->get($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function get($a){
		return $this->db->get($a);
		}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */