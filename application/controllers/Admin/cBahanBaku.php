<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cBahanBaku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mBahanBaku');
	}

	public function index()
	{
		$data = array(
			'bb' => $this->mBahanBaku->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/BahanBaku/vBahanBaku', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function createBB()
	{
		$this->form_validation->set_rules('nama_bb', 'Nama Bahan Baku', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('unit', 'Unit Perproduksi', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/sidebar');
			$this->load->view('Admin/BahanBaku/vTambahBB');
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_bb' => $this->input->post('nama_bb'),
				'keterangan'  => $this->input->post('keterangan'),
				'unit_perproduksi' => $this->input->post('unit')
			);
			$this->mBahanBaku->insert($data);
			$this->session->set_flashdata('success', 'Data Bahan Baku Berhasil Disimpan!');
			redirect('Admin/cBahanBaku', 'refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama_bb', 'Nama Bahan Baku', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('unit', 'Unit Perproduksi', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'bb' => $this->mBahanBaku->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/sidebar');
			$this->load->view('Admin/BahanBaku/vUpdateBB', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_bb' => $this->input->post('nama_bb'),
				'keterangan'  => $this->input->post('keterangan'),
				'unit_perproduksi' => $this->input->post('unit')
			);
			$this->mBahanBaku->update($id, $data);
			$this->session->set_flashdata('success', 'Data Bahan Baku Berhasil Diperbaharui!');
			redirect('Admin/cBahanBaku', 'refresh');
		}
	}
	public function delete($id)
	{
		$this->mBahanBaku->delete($id);
		$this->session->set_flashdata('success', 'Data Bahan Baku Berhasil Dihapus!');
		redirect('Admin/cBahanBaku', 'refresh');
	}
}

/* End of file cBahanBaku.php */
