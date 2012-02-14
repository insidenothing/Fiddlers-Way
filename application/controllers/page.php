<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		
		$data['title'] 		= "Page Title";
		$data['content'] 	= "Page Content";
		
		$this->load->view('common_header');
		$this->load->view('page_view',$data);
		$this->load->view('common_footer');
	}
}

