<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function index()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/AnalisisABC/vHasilAnalisis');
		$this->load->view('Admin/Layouts/footer');
	}
	public function detail_hasil()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/AnalisisABC/vDetailHasil');
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cAnalisis.php */
