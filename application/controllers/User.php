<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
 	{
 		parent::__construct();

 		$this->load->library('form_validation');
 		// $this->load->helper('MY');
 		$this->load->model('user_model');
 	}

 	public function register(){
 		
 		$this->form_validation->set_rules('nama', 'Nama', 'required');
 		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
 		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
 		$this->form_validation->set_rules('password', 'Password', 'required');
 		$this->form_validation->set_rules('password2', 'Konfirmasi Password','matches[password]');

 		if($this->form_validation->run() === FALSE){
 			$this->load->view("template/header");
		// Passing data ke view
		$this->load->view('user/register');
		$this->load->view("template/footer");
 		} else {

 		$enc_password = md5($this->input->post('password'));

		$this->user_model->register($enc_password);

		// Set message
		$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

		redirect('home');
 		}
 	}

 	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view("template/header");
		// Passing data ke view
		$this->load->view('user/login');
		$this->load->view("template/footer");
		} 
		else {
			
			// Get username
			$username = $this->input->post('username');
			// Get & encrypt password
			$password = md5($this->input->post('password'));

			// Login user
			$user_id = $this->user_model->login($username, $password);

			if($user_id){
				// Buat session
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true,
					'id_level' =>$this->user_model->get_user_level($user_id)
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');

				redirect('user/dashboard');
			} else {
				// Set message
				$this->session->set_flashdata('login_failed', 'username atau password salah');

				redirect('user/login');
			}		
		}
	}

	// Log user out
	public function logout(){
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		// Set message
		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

		redirect('home');
	}

	//untuk memanggil sesion level 
	public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
    }

	public function dashboard(){
		if(!$this->session->userdata('logged_in'))
			redirect('user/login');

		$user_id = $this->session->userdata('user_id');

		$data['user'] = $this->user_model->get_user_detail($user_id);

		$userData = $this->get_userdata();
		if ($userData['id_level'] === '1'){
            $this->load->view('user/dashboard', $data);
        } else if($userData['id_level'] === '2'){
            $this->load->view('user/dashboard_g', $data);
        } else if($userData['id_level'] === '3') {
            $this->load->view('user/dashboard_s', $data);
        }
         // $this->load->view('user/dashboard', $data);
	}

 }