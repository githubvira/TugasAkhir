<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function index()
	{
		$this->load->view('input/hero');
	}

	public function simpan()
	{
		$label = $this->input->post('label');
		$deskripsi = $this->input->post('deskripsi');
		$this->load->model('HeroModel');

		$config['upload_path']          = BASEPATH . "./../uploads";
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 100000;
		$config['max_width']            = 4000;
		$config['max_height']           = 4000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			echo "gagal";
		} else {
			$data = array('upload_data' => $this->upload->data());
			echo "sukses";
			$this->HeroModel->insertHero(
				$label,
				$deskripsi,
				$data['upload_data']['file_name'],
				'status'
			);
		}
		die;
		redirect("home/index");
	}
}
