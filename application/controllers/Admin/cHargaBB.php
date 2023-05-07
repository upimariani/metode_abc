<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHargaBB extends CI_Controller
{

	public function index()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/HargaBBPeriode/vPeriode');
		$this->load->view('Admin/Layouts/footer');
	}
	public function listharga()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/HargaBBPeriode/vListHarga');
		$this->load->view('Admin/Layouts/footer');
	}
	public function createHarga()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/HargaBBPeriode/vTambahListHarga');
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cHargaBB.php */
