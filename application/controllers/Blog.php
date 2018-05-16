<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kategori');
	}

	public function index()
	{
		$this->load->model('artikel');
		// $this->load->view('home_view', $data);
		
		// Dapatkan data dari model Blog dengan pagination
 		// Jumlah artikel per halaman
 		$limit_per_page = 4;
 		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		 $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

 		// Dapatkan jumlah data
		 $total_records = $this->artikel->get_total();
		if ($total_records > 0) {
 			// Dapatkan data pada halaman yg dituju
 			$data['artikel'] = $this->artikel->get_artikels($limit_per_page, $start_index);

		 // Konfigurasi pagination
 		$config['base_url'] = base_url() . 'blog/index/';
 		$config['total_rows'] = $total_records;
 		$config['per_page'] = $limit_per_page;
 		$config['uri_segment'] = 3;

		 $this->pagination->initialize($config);

		 // Buat link pagination
 		$data['links'] = $this->pagination->create_links();
		}
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('home_detail', $data);
	}

	//gungsi untuk insert database
	public function tambah()
	{
		$this->load->model('artikel');
		$data = array();
		$data['kategori'] = $this->model_kategori->get_all_categories();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => 'Isi %s , '));
		$this->form_validation->set_rules('content', 'content', 'required', array('required' => 'Isi %s , '));
		// $this->form_validation->set_rules('kategori', 'kategori', 'required', array('required' => 'Isi %s , '));
		$this->form_validation->set_rules('penulis', 'penulis', 'required', array('required' => 'Isi %s , '));
		$this->form_validation->set_rules('sumber', 'sumber', 'required', array('required' => 'Isi %s , '));
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required', array('required' => 'Isi %s , '));

		if ($this->form_validation->run()==FALSE){
			$this->load->view('form_tambah', $data);
		}
		else
		{
			if ($this->input->post('simpan')) {
			$upload = $this->artikel->upload();

			if ($upload['result'] == 'success') {
				$this->artikel->insert($upload);
				redirect('blog');
			}else{
				$data['message'] = $upload['error'];
			}

		}

		$this->load->view('form_tambah', $data);
			
		}

		
	}

	public function delete($id){
		$this->load->model('artikel');
		$this->artikel->hapus($id);
		redirect('blog');
	}

	public function edit($id){
		$this->load->model('artikel');
		// $data['tipe'] = 'Edit';
		$data['kategori'] = $this->model_kategori->get_all_categories();
		$data['single'] = $this->artikel->get_single($id);

		if($this->input->post('edit')){
			$upload=$this->artikel->upload();
			$this->artikel->update($upload,$id);
			redirect('blog');
		}
		

		$this->load->view('form_update',$data);
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */