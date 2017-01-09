<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembatalan extends CI_Controller {

	public function index()
	{
		$data['title'] = "Form Pembatalan";
		$this->load->view('Templates/Header');
		$this->load->view('pembatalan_ukm', $data);
		$this->load->view('Templates/Footer');
	}
}
