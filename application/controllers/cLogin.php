<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('vLogin');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data_login = $this->mLogin->login($username, $password);
			if ($data_login) {
				$level = $data_login->level_user;
				if ($level == '1') {
					redirect('Admin/cDashboard', 'refresh');
				} else {
					redirect('Pimpinan/cDashboard', 'refresh');
				}
			} else {
				$this->session->set_flashdata('error', 'Username dan Pasword Anda Salah !!!');
				redirect('');
			}
		}
	}
	public function logout()
	{
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!!!');
		redirect('', 'refresh');
	}
}

/* End of file cLogin.php */
