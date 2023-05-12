<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHargaBB extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mBahanBaku');
		$this->load->model('mHargaBB');
	}
	public function index()
	{
		$data = array(
			'periode' => $this->mHargaBB->periode()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/HargaBBPeriode/vPeriode', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function listharga($periode)
	{
		$data = array(
			'periode' => $periode,
			'listharga' => $this->mHargaBB->listharga($periode)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/HargaBBPeriode/vListHarga', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function createHarga()
	{
		$this->form_validation->set_rules('bb', 'Bahan Baku', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');

		if ($this->form_validation->run() == FALSE) {
			$periode = $this->input->post('date');
			$data = array(
				'periode' => $periode,
				'bb' => $this->mBahanBaku->select()
			);

			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/sidebar');
			$this->load->view('Admin/HargaBBPeriode/vTambahListHarga', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_bb' => $this->input->post('bb'),
				'periode' => $this->input->post('periode'),
				'harga' => $this->input->post('harga')
			);
			$this->mHargaBB->insert($data);
			$this->session->set_flashdata('success', 'Data Harga Berhasil Disimpan!');
			redirect('Admin/cHargaBB/listharga/' . $data['periode'], 'refresh');
		}
	}
	public function delete_listharga($id)
	{
		$this->mHargaBB->delete_listharga($id);
		$this->session->set_flashdata('success', 'Data List Harga Berhasil Dihapus!');
		redirect('Admin/cHargaBB', 'refresh');
	}
}

/* End of file cHargaBB.php */
