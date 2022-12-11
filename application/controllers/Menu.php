<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function index()
    {
        // $data['title'] = 'Admin Hero';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->cekLogin();
        $this->load->view('menu/index', $data);
    }
    private function cekLogin()
    {
        if ($this->session->role_id == "" || $this->session->email == "") {
            redirect('auth');
        }
    }
}
