<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CI_Controller
{

    public function hero()
    {
        $data['title'] = 'Admin Hero';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->cekLogin();
        $this->load->view('catalog/hero', $data);
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->cekLogin();
        $this->load->view('catalog/hbd', $data);
    }

    public function birthday()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->cekLogin();
        $this->load->view('catalog/birthday', $data);
    }
    public function brownies()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->cekLogin();
        $this->load->view('catalog/brownis', $data);
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
