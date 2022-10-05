<?php

class model_kategori extends CI_Model{
	public function data_topi(){
		return $this->db->get_where("tb_barang",array('kategori' => 'topi'));
	}

	public function data_kaos(){
		return $this->db->get_where("tb_barang",array('kategori' => 'kaos'));
	}

	public function data_sweater(){
		return $this->db->get_where("tb_barang",array('kategori' => 'sweater'));
	}

	public function data_celana(){
		return $this->db->get_where("tb_barang",array('kategori' => 'celana'));
	}

	public function data_sepatu(){
		return $this->db->get_where("tb_barang",array('kategori' => 'sepatu'));
	}
}