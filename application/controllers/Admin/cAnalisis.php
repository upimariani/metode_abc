<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}


	public function index()
	{
		$data = array(
			'analisis' => $this->mAnalisis->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/AnalisisABC/vHasilAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('unit_perproduksi', 'Unit Perproduksi', 'required');
		$this->form_validation->set_rules('jtkl', 'Jam Tenaga Kerja Langsung', 'required');
		$this->form_validation->set_rules('jkm', 'Jam Kerja Mesin', 'required');
		$this->form_validation->set_rules('thbb', 'Total Biaya Bahan Baku', 'required');
		$this->form_validation->set_rules('utk', 'Upah Tenaga Kerja', 'required');
		$this->form_validation->set_rules('listrik', 'Listrik', 'required');
		$this->form_validation->set_rules('mesin', 'Biaya Mesin', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'periode' => $this->mAnalisis->peride_harga()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/sidebar');
			$this->load->view('Admin/AnalisisABC/vTambahAnalisis', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$periode = $this->input->post('periode');
			$unit_perproduksi = $this->input->post('unit_perproduksi');
			$jtkl = $this->input->post('jtkl');
			$jkm = $this->input->post('jkm');
			$thbb = $this->input->post('thbb');
			$utk = $this->input->post('utk');
			$listrik = $this->input->post('listrik');
			$mesin = $this->input->post('mesin');

			//menghitung biaya BOP
			//rumus = unit yang diproduksi x jkl per unit
			$bop = $unit_perproduksi * $jtkl;
			// echo $bop;

			//menghitung alokasi biaya ke kelompok aktivitas
			$kel_listrik = round($listrik / $bop, 2);
			$kel_mesin = round($mesin / $bop, 2);

			// echo '<br>' . $kel_listrik;
			// echo '<br>' . $kel_mesin;

			//menghitung tarif persatu
			$t_listrik = $kel_listrik * $jtkl;
			$t_mesin = $kel_mesin * $jtkl;
			$jumlah_tarif = $t_listrik + $t_mesin;

			// echo '<br>' . $t_listrik;
			// echo '<br>' . $t_mesin;

			//perhitungan HPP dengan metode ABC
			//rumus = bbb + btkl + bop + biaya produksi per unit
			$hpp = $thbb + $utk + $jumlah_tarif;
			// echo '<br>' . $hpp;

			$data = array(
				'unit_produksi' => $unit_perproduksi,
				'jam_tkl' => $jtkl,
				'jam_km' => $jkm,
				'tot_harga_bb' => $thbb,
				'upah_tenaga_kerja' => $utk,
				'listrik' => $listrik,
				'biaya_mesin' => $mesin,
				'hasil' => $hpp,
				'tgl_proses' => date('Y-m-d')
			);
			$this->mAnalisis->insert($data);


			//mencari nilai max dalam tabel analisis

			$data_max = $this->db->query("SELECT MAX(id_analisis) as max FROM `analisis_abc`")->row();
			$data_id_analisis = array(
				'id_analisis' => $data_max->max
			);
			$this->db->where('periode', $periode);
			$this->db->update('harga_bb_perperiode', $data_id_analisis);

			$this->session->set_flashdata('success', 'Analisis Metode ABC Berhasil Disimpan!!!');
			redirect('Admin/cAnalisis');
		}
	}
	public function detail_hasil($id_analisis)
	{
		$data = array(
			'detail' => $this->mAnalisis->detail($id_analisis)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/sidebar');
		$this->load->view('Admin/AnalisisABC/vDetailHasil', $data);
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cAnalisis.php */
