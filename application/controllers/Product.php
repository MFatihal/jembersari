<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data['product'] = $this->Product_model->getProduct();
		$this->load->view('data_product', $data);
	}

	function tambah_aksi(){
		$id 		= $this->input->post('product_id');
		$name 		= $this->input->post('product_name');
		$prdt 		= $this->input->post('production_date');
		$ctgr 		= $this->input->post('category');
		$stck		= $this->input->post('stock');
		$prc		= $this->input->post('price');
		$wgt		= $this->input->post('weight');
		$pct		= $this->input->post('picture');
		$dscrpt		= $this->input->post('description');
 
		$data = array(
			'product_id' 		=> $id,
			'product_name' 		=> $name,
			'production_date'	=> $prdt,
			'category' 			=> $ctgr,
			'stock' 			=> $stck,
			'price'				=> $prc,
			'weight'			=> $wgt,
			'picture'			=> $pct,
			'description'		=> $dscrpt,
			);
		$this->Product_model->input_data($data,'product');
		redirect('product');
	}

	function deleteData() {
		$chkId = $this->input->post('checkItem');
		$this->Product_model->deleteProduct($chkId);
		redirect('product');
	}
}
