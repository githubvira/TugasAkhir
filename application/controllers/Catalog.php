<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CI_Controller
{

    public function index()
    {
        $this->load->view('catalog/hbd');
    }

    public function brownies()
    {
        $this->load->view('catalog/brownis');
    }

    public function desert()
    {
        $this->load->view('catalog/dessert');
    }
}
