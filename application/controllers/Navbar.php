<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navbar extends CI_Controller
{

    public function about()
    {
        $this->load->view('navbar/about');
    }

    public function service()
    {
        $this->load->view('navbar/service');
    }

    public function portofolio()
    {
        $this->load->view('navbar/portofolio');
    }
    public function contact()
    {
        $this->load->view('navbar/contact');
    }
}
