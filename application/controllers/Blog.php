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

	// function tambah(){
	// 	$this->load->view('artikel');
	// }

	// function tambah_aksi(){
	// 	$judul = $this->input->post('judul');
	// 	$content = $this->input->post('content');
	// 	$tanggal = $this->input->post('tanggal');
 
	// 	$data = array(
	// 		'judul' => $judul,
	// 		'content' => $content,
	// 		'tanggal' => $tanggal
	// 		);
	// 	$this->artikel->input_data($data,'Blog');
	// 	redirect('Blog/index');
	// }
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

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */