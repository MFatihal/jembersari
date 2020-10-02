<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Payments_model');
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data['pay'] = $this->Payments_model->getPayments();
		$data['getProduct'] = $this->Product_model->getProduct();
		$this->load->view('payments', $data);
	}

	public function addPay() {

		$payid = $this->input->post('pay_id');
		$usid = $this->input->post('user_id');
		$ordid = $this->input->post('order_id');
		$sendid = $this->input->post('send_id');
		$bank = $this->input->post('bank');
		$nom = $this->input->post('nominal');
		$prfpay = $this->input->post('proof_payment');
		$msgcd = $this->input->post('message_code');

		$data = [
			'pay_id'		=> $payid,
			'user_id'		=> $usid,
			'order_id'		=> $ordid,
			'send_id'		=> $sendid,
			'bank'			=> $bank,
			'nominal'		=> $nom,
			'proof_payment'	=> $prfpay,
			'message_code'	=> $msgcd
		];

		$this->Payments_model->inputPay($data);
		redirect('payments');
	}
}
