<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	public function index()
	{
		$data['title'] = "Pengurus UKM";
		$this->load->view('Templates/Header');
		$this->load->view('pengurus_ukm', $data);
		$this->load->view('Templates/Footer');
	}
}
