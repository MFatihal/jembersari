<?php

class Payments_model extends CI_Model {
	public function getPayments() {
		return $this->db->get('transaction')->result_array();
	}

	public function inputPay($data) {
		$this->db->insert('transaction', $data);
	}
}