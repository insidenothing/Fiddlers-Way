<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	public function index()
	{
		$this->load->view('common_header');
		$this->load->view('members_view');
		$this->load->view('common_footer');
	}
	
	
	
	
	public function index()
	{
		$data['debug'] = 'starting login process';
		$this->load->view('common_header');
		$this->load->view('members_view',$data);
		$this->load->view('common_footer');
	}
}

