<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pimpinan/Layouts/head');
		$this->load->view('Pimpinan/Layouts/sidebar');
		$this->load->view('Pimpinan/vDashboard');
		$this->load->view('Pimpinan/Layouts/footer');
	}
}

/* End of file cDashboard.php */
