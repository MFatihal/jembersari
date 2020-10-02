<?php 

class Product_Model extends CI_Model {

	public function getProduct() {
		return $this->db->get('product')->result_array();
	}

	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	public function deleteProduct($chkId) {
		foreach ($chkId as $chk) {
			$this->db->delete('product', ['product_id' => $chk]);
		}
	}
}