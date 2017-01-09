<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisi extends CI_Controller {

	public function index()
	{
		$data['title'] = "Visi Misi UKM";
		$this->load->view('Templates/Header');
		$this->load->view('visimisi_ukm', $data);
		$this->load->view('Templates/Footer');
	}
}
