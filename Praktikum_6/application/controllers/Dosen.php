<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('DosenModel', 'dsn1');
        $dsn1 = new DosenModel();
        $dsn1->nidn = "040001";
        $dsn1->nama = "Sirojul Munir, M.Kom";
        $dsn1->gender = "L";
        $dsn1->pendidikan = "S2";

        $this->load->model('DosenModel', 'dsn2');
        $dsn2 = new DosenModel();
        $dsn2->nidn = "040002";
        $dsn2->nama = "Ahmad Rio Adriansyah, M.Si";
        $dsn2->gender = "L";
        $dsn2->pendidikan = "S2";

        $this->load->model('DosenModel', 'dsn3');
        $dsn3 = new DosenModel();
        $dsn3->nidn = $this->input->post('nidn');
        $dsn3->nama = $this->input->post('nama');
        $dsn3->gender = $this->input->post('gender');
        $dsn3->pendidikan = $this->input->post('pendidikan');


        $data = array(
            'title' => "Dosen",
            'list_dosen' => [$dsn1, $dsn2, $dsn3]
        );

        $this->load->view('header', $data);
        $this->load->view('navbar');
        $this->load->view('dosen/index');
        $this->load->view('footer');
    }

    public function create()
    {
        $data = array(
            'title' => 'Form Dosen'
        );

        $this->load->view('header', $data);
        $this->load->view('dosen/formdsn');
    }

    
}