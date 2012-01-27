<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preview extends CI_Controller {

	public function index()
	{
		$this->load->view('common_header');
		$this->load->view('preview_view');
		$this->load->view('common_footer');
	}
}

