<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$data['title'] = "Gallery Karya UKM";
		$this->load->view('Templates/Header');
		$this->load->view('gallery_ukm', $data);

	}
}

