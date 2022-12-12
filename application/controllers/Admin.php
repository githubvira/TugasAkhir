<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
    $this->debugMode(__FILE__, __FUNCTION__);
  }

  public function heroEvaluate()
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    $data['heroList'] = $this->heroModel->getHero();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('controlPanel/template/header', $data);
    $this->load->view('controlPanel/template/sidebar', $data);
    $this->load->view('controlPanel/hero/heroEvaluate', $data);
    $this->load->view('controlPanel/template/footer', $data);
  }

  public function heroUpdate()
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    /* 
      buat form di view/yang mengirim data ke controller Admin/heroUpdate
      data yang dikirim: 
        
        id
        label
        deskripsi
        file_foto
        status_persetujuan
     */
    $this->form_validation->set_rules('id', 'id', 'required');
    $this->form_validation->set_rules('status_persetujuan', 'status_persetujuan', 'required');
    if ($this->form_validation->run()) {
      $id = $this->input->post('id');
      $data['status_persetujuan'] = $this->input->post('status_persetujuan');
      if ($this->heroModel->updateHero($id, $data)) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success</div>');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed</div>');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Something Went wrong</div>');
    }
    $this->form_validation->reset_validation();
    redirect('Admin/heroEvaluate');
  }




  public function productEvaluate()
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    $data['productList'] = $this->productModel->getProduct();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('controlPanel/template/header', $data);
    $this->load->view('controlPanel/template/sidebar', $data);
    $this->load->view('controlPanel/product/productEvaluate', $data);
    $this->load->view('controlPanel/template/footer', $data);
  }
  public function productUpdate()
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    /* 
    /* 
      buat form di view/yang mengirim data ke controller Admin/productUpdate
      data yang dikirim: 
        
        id
        Nama Produk
        Harga Produk
        Jenis Produk
        deskripsi
        Input Gambar
        status_persetujuan
     */
    $this->form_validation->set_rules('id', 'id', 'required');
    $this->form_validation->set_rules('status_persetujuan', 'status_persetujuan', 'required');

    if ($this->form_validation->run()) {
      $id = $this->input->post('id');
      $data['status_persetujuan'] = $this->input->post('status_persetujuan');
      
      if ($this->productModel->updateProduct($id, $data)) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success</div>');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed</div>');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Something Went wrong</div>');
    }
    $this->form_validation->reset_validation();
    redirect('Admin/productEvaluate');
  }

  public function deleteProduct($id)
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    if ($id != "") {
      $img = $this->productModel->getProductById($id)['file_foto'];
      if ($this->productModel->deleteProduct($id)) {
        unlink(BASEPATH . "./../uploads/" . $img);
        echo "success";
      } else {
        echo "failed";
      }
    } {
      redirect('Admin/productEvaluate');
    }
    redirect('Admin/productEvaluate');
  }


  // public function editProduct($id)
  // {
  //   $this->productModel->getProductById($id);
  //   $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Product has been edited!</div>');
  //   redirect('Admin/productEvaluate');
  // }
  private function deleteImage($imageName){
    try {
        unlink(BASEPATH . "./../uploads/" . $imageName);
        return true;
    } catch (\Throwable $th) {
      return false;
    }
  }
  private function uploadImage($fieldName){
    $r = [
      'success' => true,
      'file_name' => ''
    ];
    $config['upload_path']          = BASEPATH . "./../uploads";
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 100000;
    $config['max_width']            = 4000;
    $config['max_height']           = 4000;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload($fieldName)) {
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
      return false;
    } else {
      $data = array('upload_data' => $this->upload->data());
      echo "sukses";
      print_r($data);
      $r['file_name'] = $data['upload_data']['file_name'];
      return $r;
    }
  }
  
  public function editProduct($id){
    $this->debugMode(__FILE__, __FUNCTION__);
    if ($id != "") {
      $data = [
        'nama_produk' => $this->input->post("nama_produk"),
        'deskripsi' => $this->input->post("deskripsi"),
        'harga_produk' => $this->input->post("harga"),
        'jenis_produk' => $this->input->post("jenis_produk"),
      ];
      
      if (isset($_FILES['file_foto']['name']) && $_FILES['file_foto']['name'] != "") {
        $imgUpload = $this->uploadImage("file_foto");
        if ($imgUpload) {
          $data['file_foto'] = $imgUpload['file_name'];
        }
        $oldImg = $this->productModel->getProductById($id)['file_foto'];
        $this->deleteImage($oldImg);
      }
      if ($this->productModel->updateProduct($id, $data)) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success</div>');
      }else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Something Went wrong</div>');
      }
      
    } else {
      redirect('Admin/productEvaluate');
    }
    redirect('Admin/productEvaluate');
  }
  public function editHero($id){
    $this->debugMode(__FILE__, __FUNCTION__);
    if ($id != "") {
      $data = [
        'label' => $this->input->post("label"),
        'deskripsi' => $this->input->post("deskripsi"),
        'status_persetujuan' => $this->input->post("status_persetujuan"),
      ];
      
      if (isset($_FILES['file_foto']['name']) && $_FILES['file_foto']['name'] != "") {
        $imgUpload = $this->uploadImage("file_foto");
        if ($imgUpload) {
          $data['file_foto'] = $imgUpload['file_name'];
        }
        $oldImg = $this->heroModel->getHeroById($id)['file_foto'];
        $this->deleteImage($oldImg);
      }
      if ($this->heroModel->updateHero($id, $data)) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success</div>');
      }else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Something Went wrong</div>');
      }
      
    } else {
      redirect('Admin/heroEvaluate');
    }
    redirect('Admin/heroEvaluate');
  }
  public function deleteHero($id)
  {
    $this->debugMode(__FILE__, __FUNCTION__);
    if ($id != "") {
      $img = $this->heroModel->getHeroById($id)['file_foto'];
      if ($this->heroModel->deleteHero($id)) {
        unlink(BASEPATH . "./../uploads/" . $img);
        echo "success";
      } else {
        echo "failed";
      }
    } {
      redirect('Admin/heroEvaluate');
    }
    redirect('Admin/heroEvaluate');
  }

  private function debugMode($fileName, $function)
  {
    // echo "$fileName"
    //   . "@$function";
  }

























  //suksesArray ( [upload_data] => Array ( [file_name] => 8e01a6fdf0424249dc842b85915b46af.jpg [file_type] => image/jpeg [file_path] => C:/xampp2/htdocs/TUGAS_AKHIR/uploads/ [full_path] => C:/xampp2/htdocs/TUGAS_AKHIR/uploads/8e01a6fdf0424249dc842b85915b46af.jpg [raw_name] => 8e01a6fdf0424249dc842b85915b46af [orig_name] => 8e01a6fdf0424249dc842b85915b46af.jpg [client_name] => 8e01a6fdf0424249dc842b85915b46af.jpg [file_ext] => .jpg [file_size] => 7.7 [is_image] => 1 [image_width] => 564 [image_height] => 564 [image_type] => jpeg [image_size_str] => width="564" height="564" ) )

  //Array ( [upload_data] => Array ( [file_name] => Contoh-1-Kenakalan-Remaja.jpg [file_type] => image/jpeg [file_path] => C:/xampp2/htdocs/TUGAS_AKHIR/uploads/ [full_path] => C:/xampp2/htdocs/TUGAS_AKHIR/uploads/Contoh-1-Kenakalan-Remaja.jpg [raw_name] => Contoh-1-Kenakalan-Remaja [orig_name] => Contoh-1-Kenakalan-Remaja.jpg [client_name] => Contoh-1-Kenakalan-Remaja.jpg [file_ext] => .jpg [file_size] => 26.43 [is_image] => 1 [image_width] => 320 [image_height] => 240 [image_type] => jpeg [image_size_str] => width="320" height="240" ) )

}
