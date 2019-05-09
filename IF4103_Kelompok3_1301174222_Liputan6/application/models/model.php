<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

	public function loadbisnis()
	{
        $data=$this->db->get('bisnis');
        return $data->result_array();
	}

	public function regis(){
		$data = [
			"nama" => $this->input->post('nama',true),
			"username" => $this->input->post('username',true),
			"email" => $this->input->post('email',true),
			"password" => $this->input->post('password',true),
		];
		$this->db->insert('admin',$data);
	}

	public function cekEmail(){
		$username = $this->input->post('username',true);
		$data = $this->db->query("SELECT * FROM admin where username = '$username'");
		return $data->row();
	}

	public function getAkun($username,$password){
		$data = $this->db->query("SELECT * FROM admin WHERE username = '$username' and password = '$password'");
		return $data->row_array();
	}

	public function getStatus($username){
		$data = $this->db->query("SELECT * FROM admin WHERE username = '$username' ");
		return $data->result_array();
	}
}