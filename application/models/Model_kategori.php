<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	//fungsi untuk membuat kategori baru
	public function create_category() {
		$data = array(
		'kategori' => $this->input->post('kategori'),
		'deskripsi' => $this->input->post('deskripsi')
	);
		$this->db->insert('kategori', $data);
	}

	
	//menampilkan semua kategori
	public function get_all_categories()
	{

		$query = $this->db->get('kategori');
		return $query->result();
	}

	//fungsi untuk mengakses kategori
	public function get_single($id)
	{
		$query = $this->db->query('select * from kategori WHERE id_kategori='.$id);
		return $query->result();
	}

	public function hapus($id){
		$query = $this->db->query('DELETE from kategori WHERE id_kategori='.$id);
	}

	//fungsi untuk mengedit kategori
	public function update($id){
			$data = array(
			'kategori' => $this->input->post('kategori'),
			'deskripsi' => $this->input->post('deskripsi')
			);
		$this->db->where('id_kategori',$id);
		$this->db->update('kategori', $data);
	}

} 