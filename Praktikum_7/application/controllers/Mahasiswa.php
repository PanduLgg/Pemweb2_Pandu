<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Mahasiswa extends CI_Controller {
    
    public function index() {
        
    $this->load->model('Mahasiswa_model','mhs1');
    $this->mhs1->id=1;
    $this->mhs1->nim='010001';
    $this->mhs1->nama='Maulana';
    $this->mhs1->gender='L';
    $this->mhs1->ipk=3.85;
    
    $this->load->model('Mahasiswa_model','mhs2');
    $this->mhs2->id=2;
    $this->mhs2->nim='020003';
    $this->mhs2->nama='Pandu ';
    $this->mhs2->gender='L';
    $this->mhs2->ipk=3.35;
    
    $list_mhs = [$this->mhs1, $this->mhs2];
    
    $data['list_mhs']=$list_mhs;
    
    $this->load->view('navbar');
    $this->load->view('mahasiswa/index',$data);
    $this->load->view('footer');
    }

    public function create()  {

        $this->load->view('formmhs');

    }

    public function store()  {

        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $gender = $this->input->post('gender');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $ipk = $this->input->post('ipk');

        $data = array(

            'nama' => $nama,
            'nim' => $nim,
            'gender' => $gender,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'ipk' => $ipk,

        );

        //var_dump($data);

        $this->load->view('result', $data);
    }
}
