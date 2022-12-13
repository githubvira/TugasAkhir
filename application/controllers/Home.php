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

        $data['carausel'] = $this->heroModel->getAllowedHero();

        $this->load->view('tugas/index', $data);
    }
}
