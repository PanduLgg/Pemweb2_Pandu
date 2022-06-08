<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        
        $data = array(
            'title' => 'Dosen'
        );

        $data['dosen'] = $this-> DosenModel->tampil_data()->result();

        $this->load->view('header' , $data);
        $this->load->view('navbar');
        $this->load->view('dosen/index');
        $this->load->view('footer');

    }


    public function create()
    { 
        $nidn = $this->input->post('nidn');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $prodi_kode = $this->input->post('prodi_kode');

        $data = array(

            'nidn' => $nidn,
            'nama' => $nama,
            'gender' => $gender,
            'pendidikan_akhir' => $pendidikan_akhir,
            'prodi_kode' => $prodi_kode,
        );

        $this->DosenModel->input_data($data, 'dosen');
        redirect('dosen/index');
    }


    public function detail($nidn) {
        $this->load->model('DosenModel');
        $detail = $this->DosenModel->detail_data($nidn);
        $data['detail'] = $detail;

        $this->load->view('navbar');
        $this->load->view('dosen/view',$data);
        $this->load->view('footer');
    
    }


    public function delete($nidn) {

        $where = array ('nidn' => $nidn);
        $this->DosenModel->delete_data($where, 'dosen');
        redirect('dosen/index');
    }

    public function edit($nidn) {

        $where = array ('nidn' => $nidn);
        $data['dosen'] = $this->DosenModel->edit_data($where,'dosen')->result();

        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('dosen/edit',$data);
        $this->load->view('footer');
    }

    public function update() {

        $nidn = $this->input->post('nidn');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $prodi_kode = $this->input->post('prodi_kode');

        $data = array(

            'nama' => $nama,
            'gender' => $gender,
            'pendidikan_akhir' => $pendidikan_akhir,
            'prodi_kode' => $prodi_kode
        );

        $where = array (
            'nidn' => $nidn
        );

        $this->DosenModel->update_data($where,$data,'dosen');
        redirect('dosen/index');

    }
}

?>