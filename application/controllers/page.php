<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('common_header');
		$this->load->view('page_view');
		$this->load->view('common_footer');
	}
}

