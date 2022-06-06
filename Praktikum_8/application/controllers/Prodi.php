<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function index() {
        $this->load->model('prodimodel','prodi');
        $list_prodi = $this->prodi->getAll();

        $data ['list_prodi'] = $list_prodi;
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('prodi/index', $data);
        $this->load->view('footer');
    }


    public function create()
    {
        $data = array(
            'title' => 'Form Prodi'
        );
        $this->load->view('header', $data);
        $this->load->view('prodi/formprodi');
    }
}

?>