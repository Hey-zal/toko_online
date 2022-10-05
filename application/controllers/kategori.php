<?php 

class Kategori extends CI_Controller{
	public function topi()
	{
		$data['topi'] = $this->model_kategori->data_topi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('topi',$data);
		$this->load->view('templates/footer');
	}

	public function kaos()
	{
		$data['kaos'] = $this->model_kategori->data_kaos()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kaos',$data);
		$this->load->view('templates/footer');
	}

	public function sweater()
	{
		$data['sweater'] = $this->model_kategori->data_sweater()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sweater',$data);
		$this->load->view('templates/footer');
	}

	public function celana()
	{
		$data['celana'] = $this->model_kategori->data_celana()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('celana',$data);
		$this->load->view('templates/footer');
	}

	public function sepatu()
	{
		$data['sepatu'] = $this->model_kategori->data_sepatu()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sepatu',$data);
		$this->load->view('templates/footer');
	}
}