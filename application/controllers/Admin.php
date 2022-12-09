<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function index()
	{
		// echo BASEPATH . "./../uploads";
		// C:\xampp2\htdocs\TUGAS_AKHIR\system\
		$this->load->view('input/hero');
	}



	//suksesArray ( [upload_data] => Array ( [file_name] => 8e01a6fdf0424249dc842b85915b46af.jpg [file_type] => image/jpeg [file_path] => C:/xampp2/htdocs/TUGAS_AKHIR/uploads/ [full_path] => C:/xampp2/htdocs/TUGAS_AKHIR/uploads/8e01a6fdf0424249dc842b85915b46af.jpg [raw_name] => 8e01a6fdf0424249dc842b85915b46af [orig_name] => 8e01a6fdf0424249dc842b85915b46af.jpg [client_name] => 8e01a6fdf0424249dc842b85915b46af.jpg [file_ext] => .jpg [file_size] => 7.7 [is_image] => 1 [image_width] => 564 [image_height] => 564 [image_type] => jpeg [image_size_str] => width="564" height="564" ) )

	//Array ( [upload_data] => Array ( [file_name] => Contoh-1-Kenakalan-Remaja.jpg [file_type] => image/jpeg [file_path] => C:/xampp2/htdocs/TUGAS_AKHIR/uploads/ [full_path] => C:/xampp2/htdocs/TUGAS_AKHIR/uploads/Contoh-1-Kenakalan-Remaja.jpg [raw_name] => Contoh-1-Kenakalan-Remaja [orig_name] => Contoh-1-Kenakalan-Remaja.jpg [client_name] => Contoh-1-Kenakalan-Remaja.jpg [file_ext] => .jpg [file_size] => 26.43 [is_image] => 1 [image_width] => 320 [image_height] => 240 [image_type] => jpeg [image_size_str] => width="320" height="240" ) )
	public function simpan()
	{
		$label = $this->input->post('label');
		$deskripsi = $this->input->post('deskripsi');
		$this->load->model('HeroModel');

		// $config['upload_path']          = './uploads/';
		$config['upload_path']          = BASEPATH . "./../uploads";
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 100000;
		// $config['file_name']            = $fileName;
		$config['max_width']            = 4000;
		$config['max_height']           = 4000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			echo "gagal";
			// print_r($error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			echo "sukses";
			$this->HeroModel->insertHero(
				$label,
				$deskripsi,
				$data['upload_data']['file_name'],
				'status'
			);

			$this->load->view('upload_success', $data);
		}
		// die;
		redirect("home/index");
		// die;
		// $this->HeroModel->insertHero('label', 'deskripsi', 'gambar', 'status');
		// $this->load->view('input/hero');
	}
}
