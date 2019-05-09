<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllerbola extends CI_Controller {

	public function index()
	{
		$this->load->view('bola');
	}
}
