<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}


	public function index()
	{
		$data = array(
			'laporan' => $this->mAnalisis->select()
		);
		$this->load->view('Pimpinan/Layouts/head');
		$this->load->view('Pimpinan/Layouts/sidebar');
		$this->load->view('Pimpinan/vLaporan', $data);
		$this->load->view('Pimpinan/Layouts/footer');
	}
}

/* End of file cLaporan.php */
