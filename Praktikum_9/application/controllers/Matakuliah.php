<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MataKuliah extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model("MataKuliahModel", 'matkul1');
        $matkul1 = new MataKuliahModel();
        $matkul1->nama = "Pemrogramman Web";
        $matkul1->sks = 3;
        $matkul1->kode = "5001";

        $this->load->model("MataKuliahModel", 'matkul2');
        $matkul2 = new MataKuliahModel();
        $matkul2->nama = "Statistik dan Probabilitas";
        $matkul2->sks = 2;
        $matkul2->kode = "5002";

        $this->load->model("MataKuliahModel", 'matkul3');
        $matkul3 = new MataKuliahModel();
        $matkul3->nama = "Basis Data";
        $matkul3->sks = 4;
        $matkul3->kode = "5002";

        $this->load->model("MataKuliahModel", 'matkul4');
        $matkul4 = new MataKuliahModel();
        $matkul4->nama = $this->input->post('nama');
        $matkul4->sks = $this->input->post('sks');
        $matkul4->kode = $this->input->post('kode');

        $data = array(
            'title' => "Matakuliah",
            'list_matkul' => [$matkul1, $matkul2, $matkul3, $matkul4],
        );

        $this->load->view('header', $data);
        $this->load->view('navbar');
        $this->load->view('matakuliah/index');
        $this->load->view('footer');
    }
    public function create()
    {
        $data = array(
            'title' => 'Form Matakuliah'
        );
        $this->load->view('header', $data);
        $this->load->view('matakuliah/formmatkul');
    }
}