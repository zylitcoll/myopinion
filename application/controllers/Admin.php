<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        // Proteksi Halaman: Jika belum login, redirect ke halaman login
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    // Fungsi index() akan menjadi halaman dashboard utama
    function index(){
        // Cukup tampilkan view dashboard utama.
        // Navigasi ke data pertanyaan/responden akan ada di dalam view ini.
        $this->load->view('admin');
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}