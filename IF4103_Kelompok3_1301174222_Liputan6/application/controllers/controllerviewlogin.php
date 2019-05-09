<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllerviewlogin extends CI_Controller {

	public function index()
	{
		$this->load->view('viewlogin');
	}

	function __construct(){
		parent::__construct();
		$this->load->model('model');
	}

	function Proses_login(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$validate = $this->model->getAkun($username,$password);
		if($validate>0){
			$data['akun'] = $this->model->getStatus($username);
			$this->load->view('header2',$data);
			$this->load->view('utama2');
		}
		else{
			$this->session->set_flashdata('password salah');
			redirect('controllerviewlogin');
		}
	}
}
