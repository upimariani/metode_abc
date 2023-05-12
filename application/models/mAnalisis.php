<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function peride_harga()
	{
		return $this->db->query("SELECT SUM(harga) as harga, id_harga, id_bb, periode FROM `harga_bb_perperiode` WHERE id_analisis='0' GROUP BY periode")->result();
	}
	public function insert($data)
	{
		$this->db->insert('analisis_abc', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('analisis_abc');
		return $this->db->get()->result();
	}
	public function detail($id_analisis)
	{
		$this->db->select('*');
		$this->db->from('analisis_abc');
		$this->db->where('id_analisis', $id_analisis);
		return $this->db->get()->row();
	}
}

/* End of file mAnalisis.php */
