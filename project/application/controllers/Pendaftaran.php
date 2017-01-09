<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function index()
	{
		$data['title'] = "Form Pendaftaran";
		$this->load->view('Templates/Header');
		$this->load->view('pendaftaran_ukm', $data);
		$this->load->view('Templates/Footer');
	}
}
