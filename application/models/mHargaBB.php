<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mHargaBB extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('harga_bb_perperiode', $data);
	}
	public function periode()
	{
		return $this->db->query("SELECT * FROM `harga_bb_perperiode` GROUP BY periode")->result();
	}
	public function listharga($periode)
	{
		return $this->db->query("SELECT * FROM `harga_bb_perperiode` JOIN bahan_baku ON harga_bb_perperiode.id_bb=bahan_baku.id_bb WHERE periode='" . $periode . "'")->result();
	}
	public function delete_listharga($id)
	{
		$this->db->where('id_harga', $id);
		$this->db->delete('harga_bb_perperiode');
	}
}

/* End of file mHargaBB.php */
