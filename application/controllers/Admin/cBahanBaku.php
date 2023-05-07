<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cBahanBaku extends CI_Controller
{

	public function index()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/BahanBaku/vBahanBaku');
		$this->load->view('Admin/Layouts/footer');
	}
	public function createBB()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/BahanBaku/vTambahBB');
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cBahanBaku.php */
