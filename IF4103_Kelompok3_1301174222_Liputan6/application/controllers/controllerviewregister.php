<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllerviewregister extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model');
	}

	public function index()
	{
		$this->load->view('viewRegister');
	}

	public function registrasi(){
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run()==false){
			redirect('controllerviewhome');
		}
		else{
			$cek = $this->model->cekEmail();
			if ($cek>0){
				$this->session->set_flashdata('Telah Ada','Terdaftar');
				redirect('controllerviewhome');
			}
			else{
				$this->model->regis();
				$this->session->set_flashdata('Telah Tersimpan','Tersimpan');
				redirect('controllerviewlogin');
			}
		}
	}
}
