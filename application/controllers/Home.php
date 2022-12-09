<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("HeroModel", "heroModel");
    }
    public function index()
    {
        // echo $this->session->role_id;
        // if ($this->session->role_id == '1') {

        //     echo '<>';
        // } else {
        //     echo "user";
        // }
        // $this->load->model('M_heroUnit');
        // $data['hero'] = $this->M_heroUnit->getHero();

        $data['carausel'] = $this->heroModel->getHero();

        $this->load->view('tugas/index', $data);
    }
}
