<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipping extends CI_Controller {

	public function index()
	{
		$this->load->view('shipping');
	}

	public function addShip () {
		$sendid = $this->input->post('send_id');
		$sender = $this->input->post('sender');
		$prov = $this->input->post('province');
		$regc = $this->input->post('regency');
		$subd = $this->input->post('sub_district');
		$vlg = $this->input->post('village');
		$zcd = $this->input->post('zip_code');
		$phn = $this->input->post('phone');
		$crir = $this->input->post('courier');
		$prcSend = $this->input->post('price_send');

		$data = [
			'send_id'		=> $sendid,
			'sender'		=> $sender,
			'province'		=> $prov,
			'regency'		=> $regc,
			'sub_dictrict'	=> $subd,
			'village'		=> $vlg,
			'zip_code'		=> $zcd,
			'phone'			=> $phn,
			'courier'		=> $crir,
			'price_send'	=> $prcSend,
		];

		$this->Shipping_model->inputShipping($data);
		redirect('shipping');
	}
}
