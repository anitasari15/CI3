<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
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

		if ($this->input->post('simpan')) {
			$upload = $this->artikel->upload();

			if ($upload['result'] == 'success') {
				$this->artikel->insert($upload);
				redirect('blog');
			}else{
				$data['message'] = $upload['error'];
			}
		}

		$this->load->view('home_view', $data);
	}

	public function delete($id){
		$this->load->model('artikel');
		$this->artikel->hapus($id);
		redirect('blog');
	}

	public function edit($id){
		$this->load->model('artikel');
		// $data['tipe'] = 'Edit';
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