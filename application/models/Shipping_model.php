<?php

class Shipping_model extends CI_Model {
	public function getShipping() {
		return $this->db->get('shipping')->result_array();
	}

	public function inputShipping($data) {
		$this->db->insert('shipping', $data);
	}
}