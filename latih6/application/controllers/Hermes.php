<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hermes extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Hallo_Hermes');
	}
}