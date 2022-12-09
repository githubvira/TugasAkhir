<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hero extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Admin Hero';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->cekLogin();
        $this->load->view('catalog/hero', $data);
    }
    private function cekLogin()
    {
        if ($this->session->role_id == "" || $this->session->email == "") {
            redirect('auth');
        }
        // echo "terserah";
        // echo $this->session->role_id;
        // echo $this->session->email;
    }
}
