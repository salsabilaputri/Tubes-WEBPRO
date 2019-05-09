<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllerheader extends CI_Controller {

	public function index()
	{
		$this->load->view('Header');
	}
}
