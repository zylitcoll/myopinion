<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        // Load model untuk mengambil data dasar
        $this->load->model('Dashboard_model');
        // Proteksi Halaman: Jika belum login, redirect ke halaman login
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    function index(){
        // Mengambil data dari model
        $data['total_pertanyaan'] = $this->Dashboard_model->getTotalPertanyaan();
        $data['total_responden'] = $this->Dashboard_model->getTotalResponden();
        
        // Skor CSI tidak dihitung di sini, karena sudah ada di halaman hasil.
        // Cukup tampilkan dashboard dengan data dasar.

        // Mengirim data ke view 'admin'
        $this->load->view('admin', $data);
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}