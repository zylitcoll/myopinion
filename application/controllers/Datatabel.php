<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datatabel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Proteksi: Pastikan hanya admin yang bisa akses
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	// Fungsi helper untuk menampilkan output dari Grocery CRUD
	public function _example_output($output = null)
	{
		// Kita akan menggunakan view 'admin_data.php' sebagai template untuk menampilkan tabel CRUD
		$this->load->view('admin_data.php', (array)$output);
	}

	public function index()
	{
		// Jika Datatabel diakses tanpa metode, arahkan ke dashboard utama
		redirect(base_url('admin'));
	}

	// Fungsi untuk CRUD Data Pertanyaan
	public function datapertanyaan()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('t_pertanyaan');
		$crud->set_subject('Data Pertanyaan');
		$crud->columns('id','pertanyaan','isi1','isi2','isi3','isi4');
		$crud->fields('pertanyaan','isi1','isi2','isi3','isi4');
		$crud->required_fields('pertanyaan','isi1','isi2','isi3','isi4');
		
		// Mengganti nama label kolom agar lebih mudah dibaca
		$crud->display_as('isi1', 'Pilihan A')
			 ->display_as('isi2', 'Pilihan B')
			 ->display_as('isi3', 'Pilihan C')
			 ->display_as('isi4', 'Pilihan D');

		$output = $crud->render();
		$this->_example_output($output);
	}

	// Fungsi untuk menampilkan Data Responden (hanya bisa dilihat)
	public function dataresponden()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('t_kuisioner');
		$crud->set_subject('Data Responden');
		$crud->columns('id','responden','p1','p2','p3','p4','p5','p6','p7','p8','p9');
		
		// Admin tidak bisa mengubah, menambah, atau menghapus jawaban responden
		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_delete();
		
		$output = $crud->render();
		$this->_example_output($output);
	}
}