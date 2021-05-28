<?php 
 
class M_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('user');
	}

	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}