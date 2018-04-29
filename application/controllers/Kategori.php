<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

	//fungsi untuk membuat kategori baru
	public function create()
	{
		$this->load->model('model_kategori');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kategori','Nama Kategori','required|is_unique[kategori.kategori]', 
			array('required' => 'Isi %s donk, males amat.'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('required' => 'Isi %s , '));

		if($this->form_validation->run() == FALSE){
			$this->load->view('tambah_kategori');
		} else {
			if ($this->input->post('simpan')) {
				$this->model_kategori->create_category();
				redirect('kategori');
			}
			$this->load->view('tampil_kategori');
		}
	}


	//fungsi untuk menampilkan semua kategori pada tabel
	public function index() 
	{
		$this->load->model('model_kategori');

		// Dapatkan semua kategori
		$data['kategori'] = $this->model_kategori->get_all_categories();

		$this->load->view('tampil_kategori', $data);
	}

	//fungsi delete untuk kategori
	public function delete($id){
		$this->load->model('model_kategori');
		$this->model_kategori->hapus($id);
		redirect('kategori');
	}

	//fungsi untuk mengedit kategori

	public function edit($id){
		$this->load->model('model_kategori');
		// $data['tipe'] = 'Edit';
		$data['single'] = $this->model_kategori->get_single($id);

		if($this->input->post('edit')){
			$this->model_kategori->update($id);
			redirect('kategori');
		}
		$this->load->view('update_kategori', $data);
	}
}