<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		
		
		$data['title'] 		= "Page Title: $link";
		$data['content'] 	= "Page Content";
		
		$this->load->view('common_header');
		$this->load->view('blog_view',$data);
		$this->load->view('common_footer');
	}
}

