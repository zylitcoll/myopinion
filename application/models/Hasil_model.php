<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_model extends CI_Model {

    // Mengambil semua data pertanyaan dari t_pertanyaan
    public function get_all_pertanyaan()
    {
        return $this->db->get('t_pertanyaan')->result_array();
    }

    // Mengambil semua hasil kuesioner dari t_kuisioner
    public function get_all_kuisioner()
    {
        return $this->db->get('t_kuisioner')->result_array();
    }
}