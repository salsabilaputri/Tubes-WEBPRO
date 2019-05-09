<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllerbisnis2 extends CI_Controller {

	public function index()
	{
		$this->load->Model('model');
		$data['berita'] = $this->model->loadbisnis();
		$this->load->view('Bisnis2', $data);
	}
}
