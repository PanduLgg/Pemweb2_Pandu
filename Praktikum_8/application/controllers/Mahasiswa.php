<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        
        $data = array(
            'title' => 'Mahasiswa'
        );

        $data['mahasiswa'] = $this-> MahasiswaModel->tampil_data()->result();

        $this->load->view('header' , $data);
        $this->load->view('navbar');
        $this->load->view('mahasiswa/index');
        $this->load->view('footer');

    }


    public function create()
    { 
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $ipk = $this->input->post('ipk');
        $prodi_kode = $this->input->post('prodi_kode');

        $data = array(

            'nim' => $nim,
            'nama' => $nama,
            'gender' => $gender,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'ipk' => $ipk,
            'prodi_kode' => $prodi_kode,
        );

        $this->MahasiswaModel->input_data($data, 'mahasiswa');
        redirect('mahasiswa/index');
    }


    public function detail($nim) {
        $this->load->model('MahasiswaModel');
        $detail = $this->MahasiswaModel->detail_data($nim);
        $data['detail'] = $detail;

        $this->load->view('navbar');
        $this->load->view('mahasiswa/view',$data);
        $this->load->view('footer');
    
    }


    public function delete($nim) {

        $where = array ('nim' => $nim);
        $this->MahasiswaModel->delete_data($where, 'mahasiswa');
        redirect('mahasiswa/index');
    }

    public function edit($nim) {

        $where = array ('nim' => $nim);
        $data['mahasiswa'] = $this->MahasiswaModel->edit_data($where,'mahasiswa')->result();

        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('mahasiswa/edit',$data);
        $this->load->view('footer');
    }

    public function update() {

        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');
        $tmp_lahir = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $ipk = $this->input->post('ipk');
        $prodi_kode = $this->input->post('prodi_kode');

        $data = array(

            'nama' => $nama,
            'gender' => $gender,
            'tmp_lahir' => $tmp_lahir,
            'tgl_lahir' => $tgl_lahir,
            'ipk' => $ipk,
            'prodi_kode' => $prodi_kode,

        );

        $where = array (
            'nim' => $nim
        );

        $this->MahasiswaModel->update_data($where,$data,'mahasiswa');
        redirect('mahasiswa/index');

    }
}

?>