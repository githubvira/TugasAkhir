<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->model("HeroModel", "heroModel");
        $this->load->model("ProductModel", "productModel");
    }

    public function index()
    {
        echo __FILE__;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->cekLogin();
        $this->load->view('catalog/hbd', $data);
    }

    public function brownies($filter = "")
    {
        $search = $this->input->get('search');
        // $filter = $this->input->get('filter');
        $filterharga = $this->input->get('filterharga');
        $data['search'] = $search;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->cekLogin();

        if ($search == "" && $filter == "" && $filterharga == "") {
            $data['items'] = $this->productModel->getAllowedProduct();
        } else if ($filterharga != "") {
            $data['items'] = $this->productModel->showbyharga($filterharga);
        } else {
            $data['items'] = $this->productModel->searchProduct($search, $filter);
        }

        if ($data['items']) {
            foreach ($data['items'] as &$item) {
                $item['harga_produk'] = $this->formatToRupiah($item['harga_produk']);
            }
        }

        $this->load->view('catalog/brownis', $data);
    }
    public function formatToRupiah($price)
    {
        return  "Rp " . number_format($price, 2, ',', '.');
    }

    public function desert()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->cekLogin();
        $this->load->view('catalog/dessert', $data);
    }

    private function cekLogin()
    {
        if ($this->session->role_id == "" || $this->session->email == "") {
            redirect('auth');
        }
    }
}
