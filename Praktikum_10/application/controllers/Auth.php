<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim',);


        if ($this->form_validation->run() == false) {

            $data = array('title' => "Login");
            $this->load->view('header', $data);
            $this->load->view('template/navbar');
            $this->load->view('auth/login');
            $this->load->view('footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $users = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($users) {
            //user aktif
            if ($users['is_active'] == 1) {
                //password
                if (password_verify($password, $users['password'])) {
                    $data = [
                        'username' => $users['username'],
                        'role' => $users['role'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert" >
                    Wrong Password!
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert" >
                Email does not active yet!
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert" >
            Email does not exist! Please Register first!
            </div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', [
            'is_unique' => 'This username already exist!',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'This email already used!',
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'Password does not match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data = array('title' => "Registration");
            $this->load->view('header', $data);
            $this->load->view('template/navbar');
            $this->load->view('auth/registration');
            $this->load->view('footer');
        } else {

            $data = [
                'username' => htmlspecialchars($this->input->post('username', 'true')),
                'email' => htmlspecialchars($this->input->post('email', 'true')),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 2,
                'is_active' => 1,
                'created_at' => time(),
                'last_login' => time(),
            ];

            //model
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert" >
            Congratulation! your account already created!
            </div>');
            redirect('auth');
        }
    }
}
