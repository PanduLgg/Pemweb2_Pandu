<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        
        $data = array(
            'title' => 'Prodi'
        );
        
        $data['prodi'] = $this-> ProdiModel->tampil_data()->result();

        $this->load->view('header' , $data);
        $this->load->view('navbar');
        $this->load->view('prodi/index');
        $this->load->view('footer');

    }


    public function create()
    { 
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $kaprodi = $this->input->post('kaprodi');

        $data = array(

            'kode' => $kode,
            'nama' => $nama,
            'kaprodi' => $kaprodi,
        );

        $this->ProdiModel->input_data($data, 'prodi');
        redirect('prodi/index');
    }

    public function detail($kode) {
        $this->load->model('ProdiModel');
        $detail = $this->ProdiModel->detail_data($kode);
        $data['detail'] = $detail;

        $this->load->view('navbar');
        $this->load->view('prodi/view',$data);
        $this->load->view('footer');
    
    }

    public function delete($kode) {

        $where = array ('kode' => $kode);
        $this->ProdiModel->delete_data($where, 'prodi');
        redirect('prodi/index');
    }

    public function edit($kode) {

        $where = array ('kode' => $kode);
        $data['prodi'] = $this->ProdiModel->edit_data($where,'prodi')->result();

        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('prodi/edit',$data);
        $this->load->view('footer');
    }

    public function update() {

        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $kaprodi = $this->input->post('kaprodi');


        $data = array(

            'nama' => $nama,
            'kaprodi' => $kaprodi,
        );

        $where = array (
            'kode' => $kode
        );

        $this->ProdiModel->update_data($where,$data,'prodi');
        redirect('prodi/index');

    }
}




?>