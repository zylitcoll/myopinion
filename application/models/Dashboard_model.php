<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function getTotalPertanyaan() {
        return $this->db->count_all('t_pertanyaan');
    }

    public function getTotalResponden() {
        return $this->db->count_all('t_kuisioner');
    }
}