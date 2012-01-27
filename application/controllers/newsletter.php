<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends CI_Controller {

	public function index()
	{
		$this->load->view('common_header');
		$this->load->view('newsletter_view');
		$this->load->view('common_footer');
	}
	
	
	
	public function signup()
	{
		
		$data['debug'] = 'starting double opt-in signup';
		$this->load->view('common_header');
		$this->load->view('newsletter_view',$data);
		$this->load->view('common_footer');
	}
	
	
	
	
}

