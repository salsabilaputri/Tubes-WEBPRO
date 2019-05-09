<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllerfoto extends CI_Controller {

	public function index()
	{
		$this->load->view('Foto');
	}
}
