<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControlPanel extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("HeroModel", "heroModel");
    $this->load->model("ProductModel", "productModel");
  }

  public function index()
  {
    $this->hero();
  }

  public function heroList()
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    $data['heroList'] = $this->heroModel->getHero();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('controlPanel/template/header', $data);
    $this->load->view('controlPanel/template/sidebar', $data);
    $this->load->view('controlPanel/hero/heroList', $data);
    $this->load->view('controlPanel/template/footer', $data);
  }

  public function hero()
  {
    $this->debugMode(__FILE__, __FUNCTION__);

    $data['title'] = 'Admin Hero';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('controlPanel/template/header', $data);
    $this->load->view('controlPanel/template/sidebar', $data);
    $this->load->view('controlPanel/hero/addHero', $data);
    $this->load->view('controlPanel/template/footer', $data);
  }

  public function addHero()
  {
    $label = $this->input->post('label');
    $deskripsi = $this->input->post('deskripsi');
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
      $this->heroModel->insertHero(
        $label,
        $deskripsi,
        $data['upload_data']['file_name'],
        'belum disetujui'
      );
    }
    // die;
    redirect("ControlPanel/index");
  }

  public function productList()
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    $data['productList'] = $this->productModel->getProduct();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('controlPanel/template/header', $data);
    $this->load->view('controlPanel/template/sidebar', $data);
    $this->load->view('controlPanel/product/productList', $data);
    $this->load->view('controlPanel/template/footer', $data);
  }


  public function addProduct()
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    $data = [];
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('controlPanel/template/header', $data);
    $this->load->view('controlPanel/template/sidebar', $data);
    $this->load->view('controlPanel/product/addProduct', $data);
    $this->load->view('controlPanel/template/footer', $data);
  }






  public function insertProduct()
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $newProduct = [
      'nama_produk' => $this->input->post('nama_produk'),
      'harga_produk' => $this->input->post('harga_produk'),
      'deskripsi' => $this->input->post('deskripsi'),
      'jenis_produk' => $this->input->post('jenis_produk'),
      'status_persetujuan' => 'belum disetujui',
      'file_foto' => $this->input->post('file_foto'),
    ];


    $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
    $this->form_validation->set_rules('harga_produk', 'harga_produk', 'required');
    $this->form_validation->set_rules('jenis_produk', 'jenis_produk', 'required');
    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
    if ($this->form_validation->run()) {
      $data['status_persetujuan'] = $this->input->post('status_persetujuan');

      $config['upload_path']          = BASEPATH . "./../uploads";
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 100000;
      $config['max_width']            = 4000;
      $config['max_height']           = 4000;
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('file_foto')) {
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
        echo "gagal";
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Field Required</div>');
      } else {
        $res = array('upload_data' => $this->upload->data());
        print_r($res);
        echo "sukses";
        $newProduct['file_foto'] = $res['upload_data']['file_name'];
        $this->productModel->insertProduct($newProduct);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success</div>');
      }
    } else {
      echo "here";
    }

    $this->form_validation->reset_validation();

    redirect('ControlPanel/addProduct');
  }

  private function debugMode($fileName, $function)
  {
    echo BASEPATH . "<br>";
    echo FCPATH . "<br>";
    echo "$fileName"
      . "@$function";
  }
}
