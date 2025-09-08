<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
    }

    // Menampilkan halaman login
    public function index()
    {
        // Jika sudah login, langsung lempar ke dashboard admin
        if($this->session->userdata('status') == "login"){
            redirect(base_url("admin"));
        }
        $this->load->view('login');
    }

    // Memproses data dari form login
    public function aksi_login()
    {
        $nama_user = $this->input->post('nama_user');
        $password = $this->input->post('password');
        
        // Menggunakan Login_model untuk mengecek ke database
        $is_valid = $this->login_model->can_login($nama_user, $password);
        
        if($is_valid) {
            $data_session = array(
                'nama' => $nama_user,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("admin")); // Redirect ke controller admin
        } else {
            // Jika gagal, bisa tambahkan pesan error
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect(base_url('login'));
        }
    }

    // Proses logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}