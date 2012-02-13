<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('v2_header');
		$this->load->view('home_view');
		$this->load->view('v2_footer');
	}
}

