<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

	public function__construct(){
		parent::__construct();
		$this->load->model('artikel');
	}

	public function index(){
		$artikel['data'] = $this->artikel->get_artikels();
	}

	public function get_json(){
		$artikel['data'] = $this->artikel->get_artikels();
		echo json_encode($artikel);
	}

	public function view_json(){
		$this->load->view('datatables/dt_json');
	}
}