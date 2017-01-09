<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function index()
	{
		$data['title'] = "Jadwal Kegiatan UKM";
		$this->load->view('Templates/Header');
		$this->load->view('kegiatan_ukm', $data);
		$this->load->view('Templates/Footer');
	}
}
