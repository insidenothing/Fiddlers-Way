<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Newsletter_model','newsletter');
		
		if($this->input->post('email'))
		{
			$data['newsletter_status'] = $this->newsletter->check_user($this->input->post('email'));
		} else 
		{
			$data['newsletter_status'] = '';
		}
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('login_view',$data);
		
		
	}
	
	
	
	public function confirm()
	{
		

		$data= array();
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('login_view',$data);
	}
	
	
	
	
}

