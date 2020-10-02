<?php

class Report_model extends CI_Model {
	public function getReport() {
		return $this->db->get('bayar')->result_array();
	}

	function tampilkan(){
         
        $query = $this->db->get('transaction');
        return $query->result();
        
    }
}