<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('hasil_model');
    }

    public function index()
    {
        // 1. Ambil semua data
        $semua_pertanyaan = $this->hasil_model->get_all_pertanyaan();
        $hasil_kuisioner = $this->hasil_model->get_all_kuisioner();
        $jumlah_responden = count($hasil_kuisioner);
        $jumlah_pertanyaan = count($semua_pertanyaan);

        // 2. Petakan jawaban teks ke skor
        $skor_map = [
            'Sangat Baik' => 4,
            'Baik' => 3,
            'Cukup' => 2,
            'Buruk' => 1
        ];
        $skala_maksimum = 4; // Nilai tertinggi dari skala

        // 3. Hitung total skor per pertanyaan
        $total_skor_per_pertanyaan = array_fill(1, $jumlah_pertanyaan, 0);
        foreach ($hasil_kuisioner as $respon) {
            for ($i = 1; $i <= $jumlah_pertanyaan; $i++) {
                $kolom_jawaban = 'p' . $i;
                if (isset($respon[$kolom_jawaban]) && isset($skor_map[$respon[$kolom_jawaban]])) {
                    $total_skor_per_pertanyaan[$i] += $skor_map[$respon[$kolom_jawaban]];
                }
            }
        }

        // 4. Hitung Mean Satisfaction Score (MSS) dan totalnya
        $mss_per_pertanyaan = [];
        $total_mss = 0;
        if ($jumlah_responden > 0) {
            for ($i = 1; $i <= $jumlah_pertanyaan; $i++) {
                $mean = $total_skor_per_pertanyaan[$i] / $jumlah_responden;
                $mss_per_pertanyaan[$i] = $mean;
                $total_mss += $mean;
            }
        }

        // 5. Hitung CSI
        $csi = 0;
        if ($jumlah_pertanyaan > 0) {
            $csi = ($total_mss / ($jumlah_pertanyaan * $skala_maksimum)) * 100;
        }

        // 6. Kirim data ke view
        $data['pertanyaan'] = $semua_pertanyaan;
        $data['mss'] = $mss_per_pertanyaan;
        $data['csi'] = $csi;

        $this->load->view('hasil', $data);
    }
}