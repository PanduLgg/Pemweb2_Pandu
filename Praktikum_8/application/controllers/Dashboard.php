<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $this->load->view('home/base');
        $this->load->view('footer');
    }
}