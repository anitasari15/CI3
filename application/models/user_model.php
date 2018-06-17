<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	public function register($enc_password){
 // Array data user
 		$data = array(
 		'nama' => $this->input->post('nama'),
 		'email' => $this->input->post('email'),
 		'kodepos' => $this->input->post('kodepos'),
 		'username' => $this->input->post('username'),
 		'password' => $enc_password,
        'id_level' => $this->input->post('member')
 	);	
 // Insert user
 	return $this->db->insert('user', $data);
 	}

 	// Proses login user
    public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('user');


        if($result->num_rows() == 1){
            return $result->row(0)->user_id;
        } else {
            return false;
        }
    }

    public function get_user_level($user_id){
        $this->db->select('id_level');
        $this->db->where('user_id', $user_id);

        $result = $this->db->get('user');

        if ($result->num_rows() == 1){
            return $result->row(0);
        }else{
            return false;
        }
    }

    function get_user_detail($user_id){
        $this->db->join('level', 'level.id_level = user.id_level', 'left');
        $this->db->where('user_id', $user_id);

        $result = $this->db->get('user');

        if($result -> num_rows() == 1){
            return $result->row(0);
        }else{
            return false;
        }
    }
 }