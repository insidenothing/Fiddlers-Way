<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Contact_model','contact');
		
		/** Newsletter Status */
		if ($this->input->cookie('email')){
			/* Logged In User */
			$data['newsletter_status'] = $this->contact->check_user($this->input->cookie('email'));
			$data['email'] = $this->input->cookie('email');		
		}elseif($this->input->post('email'))
		{
			$data['newsletter_status'] = $this->contact->check_user($this->input->post('email'));
			$data['email'] = $this->input->post('email');
		} else 
		{
			$data['newsletter_status'] = '';
			$data['email'] = '';
		}
		
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('contact_view',$data);
		
		
	}
	
	
	
	
	
	
	
}

