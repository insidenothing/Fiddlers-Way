<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('common_header');
		$this->load->view('blog_view');
		$this->load->view('common_footer');
	}
}

