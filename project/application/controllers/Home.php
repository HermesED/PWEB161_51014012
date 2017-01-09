<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "UKM Menggambar";
		$this->load->view('Templates/Header');
		$this->load->view('index_ukm', $data);
		$this->load->view('Templates/Footer');
	}
}
