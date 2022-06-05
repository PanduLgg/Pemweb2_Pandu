<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('MahasiswaModel', 'mhs1');
        $mhs1 = new MahasiswaModel();
        $mhs1->nim = "010001";
        $mhs1->nama = "Pandu";
        $mhs1->gender = "L";
        $mhs1->ipk = 3.3;

        $this->load->model('MahasiswaModel', 'mhs2');
        $mhs2 = new MahasiswaModel();
        $mhs2->nim = "010002";
        $mhs2->nama = "Risa";
        $mhs2->gender = "P";
        $mhs2->ipk = 4;

        $this->load->model('MahasiswaModel', 'mhs3');
        $mhs3 = new MahasiswaModel();

        $mhs3->nim = $this->input->post('nim');
        $mhs3->nama = $this->input->post('nama');
        $mhs3->gender = $this->input->post('gender');
        $mhs3->ipk = $this->input->post('ipk');


        $data = array(
            'title' => "Mahasiswa",
            'list_mhs' => [$mhs1, $mhs2, $mhs3]
        );


        $this->load->view('header', $data);
        $this->load->view('navbar');
        $this->load->view('mahasiswa/index');
        $this->load->view('footer');
    }

    public function create()
    {
        $data = array(
            'title' => "Form Mahasiswa",
        );

        $this->load->view('header', $data);
        $this->load->view('navbar');
        $this->load->view('mahasiswa/formmhs');
        $this->load->view('footer');
    }
}