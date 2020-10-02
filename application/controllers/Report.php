<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->model('Report_model');
		$this->load->library('cfpdf');
	}

	public function index()
	{
		$data['report']=$this->Report_model->getReport();
		$this->load->view('report', $data);
	}

	public function laporanpenjualan(){
		// if ($this->session->userdata('Login') == TRUE){
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',14);
			$pdf->Cell(45);
			$pdf->Cell(100,0,'Laporan Data Penjualan',0,0,'C');
			$pdf->Ln(5);
			$pdf->SetFont('Arial','',10);
			$pdf->SetFillColor(100,0,0);
			$pdf->SetTextColor(255);
			$pdf->SetDrawColor(0,0,0);
			$header = array('ID', 'Jenis Bank', 'Nominal' , 'Bukti Pembayaran', 'Keterangan');
			// Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
			$w = array(8, 35, 27, 45, 40, 35);
			for($i=0;$i<count($header);$i++)
			$pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
			$pdf->Ln();
			// Data
			$fill = false;
			$pdf->SetFillColor(224,235,255);
			$pdf->SetTextColor(0);
			$pdf->SetFont('');
		foreach ($this->Report_model->tampilkan() as $row):
			$pdf->Cell($w[0],6,$row->user_id,'LR',0,'L',$fill); 
			$pdf->Cell($w[1],6,$row->bank,'LR',0,'L',$fill);
			$pdf->Cell($w[2],6,$row->nominal,'LR',0,'L',$fill);
			$pdf->Cell($w[3],6,$row->proof_payment,'LR',0,'L',$fill);
			$pdf->Cell($w[4],6,$row->message_code,'LR',0,'L',$fill);
			$pdf->Ln();
			$fill = !$fill;
		endforeach;
		$pdf->Cell(array_sum($w),0,'','T');
			
			$pdf->Output();
			
		// } else { redirect('Payment'); }
		// }
	}
}
