<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}
	

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id_blog='.$id);
		return $query->result();

		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('kategori', 'blog.id_kategori = kategori.id_kategori');
		$this->db->where('blog.id_blog='.$id);
		return $this->db->get()->result();
		
	}
	//model form upload

	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	//model untuk insert data

	public function insert($upload)
	{
		$data = array(
			'id_blog' => '',
			'judul' => $this->input->post('judul'),
			'content' => $this->input->post('content'),
			// 'kategori' => $this->input->post('kategori'),
			'penulis' => $this->input->post('penulis'),
			'sumber' => $this->input->post('sumber'),
			'tanggal_post' => $this->input->post('tanggal'),
			'image' => $upload['file']['file_name'],
			'id_kategori' => $this->input->post('id_kategori')
		);

		$this->db->insert('blog', $data);
	}

	//model untuk delete

	public function hapus($id){
		$query = $this->db->query('DELETE from blog WHERE id_blog= '.$id);
	}

	public function update($upload, $id){
		if($upload['result']=='success'){
			$data = array('judul' => $this->input->post('judul'),
							'content' => $this->input->post('content'),
							'penulis' => $this->input->post('penulis'),
							'sumber' => $this->input->post('sumber'),
							'id_kategori' => $this->input->post('id_kategori'),
							'image' => $upload['file']['file_name']
			);
		} else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'content' => $this->input->post('content'),
				'penulis' => $this->input->post('penulis'),
				'sumber' => $this->input->post('sumber'),
				'id_kategori' => $this->input->post('id_kategori'),
			);
		} 
		$this->db->where('id_blog',$id);
		$this->db->update('blog', $data);
	}

}

/* End of file blog.php */
/* Location: ./application/models/blog.php */
