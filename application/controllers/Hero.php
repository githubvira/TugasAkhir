<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hero extends CI_Controller
{


    public function index()
    {
        echo __FILE__;
        $data['title'] = 'Admin Hero';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->cekLogin();
        $this->load->view('catalog/hero', $data);
    }
}
