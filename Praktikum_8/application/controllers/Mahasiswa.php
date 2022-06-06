<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->MahasiswaModel->tampil()->result();

        $data = array(
            'title' => 'Matakuliah'
        );

        $this->load->view('header', $data);
        $this->load->view('navbar');
        $this->load->view('matakuliah/index');
        $this->load->view('footer');
    }
}