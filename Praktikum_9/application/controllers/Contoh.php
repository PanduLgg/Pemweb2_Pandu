<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contoh extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data = array(
            'title' => "Home"
        );
        $this->load->view('header', $data);
        $this->load->view('navbar');
        $this->load->view('homes');
        $this->load->view('footer');
    }
}